<?php

namespace App\Controllers;

class Chemistry extends Science 
{
    private $course = 'Chemistry';
    private $mapel = 'chemistry';
    private $id = 3;
    
    public function index(){
        return redirect()->to('/science/chemistry');
    }
    public function chapter1(){
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 1',
            'materi' => 'Structure of Matter',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/chapter2',
        ];
        return view('Page/Content',$data);
    }

    public function chapter2(){
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 2',
            'materi' => 'Chemical Systems',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/chapter3',
        ];
        return view('Page/Content',$data);
    }

    public function chapter3(){
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 3',
            'materi' => 'Chemical Reactions',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/chapter4',
        ];
        return view('Page/Content',$data);
    }

    public function chapter4(){
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 4',
            'materi' => 'Matter and Energy',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/chapter5',
        ];
        return view('Page/Content',$data);
    }

    public function chapter5(){
        $data=[
            'id' => $this->id,
            'course' => $this->course,
            'chapter' => 'Chapter 5',
            'materi' => 'Nuclear Chemistry',
            'isi' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget ex blandit, sollicitudin enim sed, consequat lacus. In aliquet facilisis risus, sed laoreet tellus convallis eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean porta sit amet ex a elementum. Maecenas auctor mattis dapibus. Duis non ornare nulla, eu iaculis dolor. Nulla sem leo, tristique a efficitur quis, tincidunt at turpis. Duis nisl enim, pharetra convallis justo sed, egestas venenatis arcu. Nullam porttitor ac tortor ac tincidunt.</p>
            <br>
            <p>Suspendisse ultricies consectetur sodales. Nunc vulputate, ipsum id fringilla semper, lorem nisi faucibus nisi, in commodo urna dolor in ligula. Ut vel sollicitudin odio, id porttitor ligula. Vestibulum pretium porta nisl, eget suscipit turpis. Nullam vitae nisl enim. Curabitur auctor, tortor fringilla laoreet convallis, felis ligula cursus mi, quis dignissim dolor enim non orci. Maecenas dictum justo massa, nec venenatis metus ullamcorper sit amet. Donec iaculis, lorem sed tristique porttitor, sem risus auctor velit, et facilisis dui mi eu magna. Vivamus feugiat diam orci, eu aliquam mi dapibus ut. Pellentesque rutrum vel ante nec dignissim.</p>
            <br>',
            'next' => '/'.$this->mapel.'/midtest',
        ];
        return view('Page/Content',$data);
    }

    public function midTest(){
        $score = $this->getMidTest($this->id);

        $data=[
            'title' => $this->course,
            'mapel' => $this->mapel,
            'id' => $this->id,
            'score' => $score,
        ];

        $graded = $this->isGraded($this->id);

        if($graded){
            return view('Page/midTest_score', $data);
        }

        return view('Page/midTest', $data);
    }
}