<?HH
/**
 * Copyright 2015 Rick Mac Gillis
 *
 * Various algorithms involving strings
 */

namespace HackFastAlgos;

class Strings
{
	public static function isPalindrome(?string $text) : bool
	{
		if (empty($text)) {
			return true;
		}
	}

	public static function findLongestPalindrome(?string $text) : string
	{
		https://en.wikipedia.org/wiki/Longest_palindromic_substring
	}

	public static function getNeedlemanWunschScore(string $sequence1, string $squence2) : int
	{
		// https://en.wikipedia.org/wiki/Needleman%E2%80%93Wunsch_algorithm
	}

	public static function huffmanEncode(string $text) : string
	{
		// https://en.wikipedia.org/wiki/Huffman_coding
		// Implement it with two queues.
		// If we don't know the frequency of each character, then sort it with a heap.
	}

	public static function huffmanDecode(string $text) : string
	{
		// https://en.wikipedia.org/wiki/Huffman_coding
	}

	public static function findDialPadCombos(int $number, bool $returnWaitHandler = false) : Vector<string>
	{
		/*
		 * Take in a phone number (or any number) and return all of the possible word combinations
		 * in Theta(n log(n)) time. (Note: Until I've implemented it, the running time is theoretical.)
		 */
		$dpadCobos = static::findDialPadCombosAsync($number);
		if ($returnWaitHandler) {
			return $dpadCobos;
		}

		return $dpadCobos->getWaitHandle()->join();
	}

	public static async findDialPadCombosAsync(int $number) : Awaitable<Vector<string>>
	{
		// Recurse on the data in log3 to create a vector of strings for the given subproblem.
		// Merge the retrieved subproblem data into the data for the larger problem.
	}
}