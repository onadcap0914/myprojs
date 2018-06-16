<?php

declare(strict_types=1);

function loginMessage(): string {
	if (isset($_COOKIE['username'])){
		return "You are ". $_COOKIE['username'];
	} else  {
		return "You're not authenticated!";
	}
}

/* function addNumbers(int $a, int $b, bool $printSum=false): int {
	$sum = $a + $b;
	if ($printSum) {
		echo "The sum is " . $sum;

	}
	return $sum;

} */

function printableTitle(array $book): string {
	$result = '<i>' . $book['title']. '</i> - ' . $book['author'];
	if (!$book['available']) {
		$result .= ' <b> Book not available! </b>';
	}
	return $result;
}

function bookingBook(array &$books, string $title): bool {
	foreach ($books as $key => $book) {
		if ($book['title'] == $title) {
			if ($book['available']) {
				$books[$key]['available'] = false;
				return true;
			} else {
				return false;
			}
		}
	}
	return false;
}

function updateBooks(array $books){
	$bookJson = json_encode($books);
	file_put_contents(__DIR__ . '/books.json',$bookJson);
}
?>