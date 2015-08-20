<?HH

class SortTest extends PHPUnit_Framework_TestCase
{
	public function testSelectionSort()
	{
		$unsorted = Vector{5,4,8,1,0,-1,4,7};
		$sorted = Vector{-1,0,1,4,4,5,7,8};
		$result = \HackFastAlgos\Sort::selectionSort($unsorted);
		$this->assertEquals($sorted, $result);
	}
}