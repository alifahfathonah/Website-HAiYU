<?php namespace App\Controllers;

class Science extends BaseController
{
    public function index()
    {
        return view('Page/sciencePage');
    }

	public function math()
	{
        $data = [
            'title' => 'Math',
            'mapel' => 'math',
            'chapter1' => 'Eksponensial',
            'chapter2' => 'Logaritma',
            'chapter3' => 'Polinominal',
            'chapter4' => 'Diferential',
            'chapter5' => 'Integral',
        ];
		return view('Page/mapel', $data);
    }
    
    public function physics()
	{
        $data = [
            'title' => 'Physics',
            'mapel' => 'physics',
            'chapter1' => 'Force and Motion',
            'chapter2' => 'Fundamental Forces',
            'chapter3' => 'Kepler&#39;s Laws',
            'chapter4' => 'Energy',
            'chapter5' => 'Electricity',
        ];
		return view('Page/mapel', $data);
    }
    
    public function chemistry()
	{
        $data = [
            'title' => 'Chemistry',
            'mapel' => 'chemistry',
            'chapter1' => 'Structure of Matter',
            'chapter2' => 'Chemical Systems',
            'chapter3' => 'Chemical Reactions',
            'chapter4' => 'Matter and Energy',
            'chapter5' => 'Nuclear Chemistry',
        ];
		return view('Page/mapel', $data);
    }
    
    public function biology()
	{
        $data = [
            'title' => 'Biology',
            'mapel' => 'biology',
            'chapter1' => 'Biology Foundations',
            'chapter2' => 'Cells',
            'chapter3' => 'Energy and Transport',
            'chapter4' => 'Reproduction System',
            'chapter5' => 'Genetics',
        ];
		return view('Page/mapel', $data);
	}
}
