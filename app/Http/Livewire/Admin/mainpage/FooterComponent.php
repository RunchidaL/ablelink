<?php

namespace App\Http\Livewire\Admin\Mainpage;

use Livewire\Component;
use App\Models\Footer;

class FooterComponent extends Component
{
    public $footer_id;
    public $link_facebook;
    public $link_line;
    public $link_email;
    public $link_youtube;
    public $title1;
    public $detail1_1;
    public $detail1_2;
    public $detail1_3;
    public $detail1_4;
    public $detail1_5;
    public $title2;
    public $detail2_1;
    public $link2_1;
    public $detail2_2;
    public $link2_2;
    public $detail2_3;
    public $link2_3;
    public $detail2_4;
    public $link2_4;
    public $detail2_5;
    public $link2_5;

    public $title3;
    public $detail3_1;
    public $link3_1;
    public $detail3_2;
    public $link3_2;
    public $detail3_3;
    public $link3_3;
    public $detail3_4;
    public $link3_4;
    public $detail3_5;
    public $link3_5;

    public $title4;
    public $detail4_1;
    public $link4_1;
    public $detail4_2;
    public $link4_2;
    public $detail4_3;
    public $link4_3;
    public $detail4_4;
    public $link4_4;
    public $detail4_5;
    public $link4_5;

    public function mount($footer_id)
    {
        $f = Footer::find($footer_id);
        $this->link_facebook = $f->link_facebook;
        $this->link_line = $f->link_line;
        $this->link_email = $f->link_email;
        $this->link_youtube = $f->link_youtube;
        $this->title1 = $f->title1;
        $this->detail1_1 = $f->detail1_1;
        $this->detail1_2 = $f->detail1_2;
        $this->detail1_3 = $f->detail1_3;
        $this->detail1_4 = $f->detail1_4;
        $this->detail1_5 = $f->detail1_5;
        $this->title2 = $f->title2;
        $this->detail2_1 = $f->detail2_1;
        $this->link2_1 = $f->link2_1;
        $this->detail2_2 = $f->detail2_2;
        $this->link2_2 = $f->link2_2;
        $this->detail2_3 = $f->detail2_3;
        $this->link2_3 = $f->link2_3;
        $this->detail2_4 = $f->detail2_4;
        $this->link2_4 = $f->link2_4;
        $this->detail2_5 = $f->detail2_5;
        $this->link2_5 = $f->link2_5;

        $this->title3 = $f->title3;
        $this->detail3_1 = $f->detail3_1;
        $this->link3_1 = $f->link3_1;
        $this->detail3_2 = $f->detail3_2;
        $this->link3_2 = $f->link3_2;
        $this->detail3_3 = $f->detail3_3;
        $this->link3_3 = $f->link3_3;
        $this->detail3_4 = $f->detail3_4;
        $this->link3_4 = $f->link3_4;
        $this->detail3_5 = $f->detail3_5;
        $this->link3_5 = $f->link3_5;

        $this->title4 = $f->title4;
        $this->detail4_1 = $f->detail4_1;
        $this->link4_1 = $f->link4_1;
        $this->detail4_2 = $f->detail4_2;
        $this->link4_2 = $f->link4_2;
        $this->detail4_3 = $f->detail4_3;
        $this->link4_3 = $f->link4_3;
        $this->detail4_4 = $f->detail4_4;
        $this->link4_4 = $f->link4_4;
        $this->detail4_5 = $f->detail4_5;
        $this->link4_5 = $f->link4_5;
    }

    public function footer()
    {
        $f = Footer::find($this->footer_id);

        $f->link_facebook = $this->link_facebook;
        $f->link_line = $this->link_line;
        $f->link_email = $this->link_email;
        $f->link_youtube = $this->link_youtube;
        $f->title1 = $this->title1;
        $f->detail1_1 = $this->detail1_1;
        $f->detail1_2 = $this->detail1_2;
        $f->detail1_3 = $this->detail1_3;
        $f->detail1_4 = $this->detail1_4;
        $f->detail1_5 = $this->detail1_5;
        $f->title2 = $this->title2;
        $f->detail2_1 = $this->detail2_1;
        $f->link2_1 = $this->link2_1;
        $f->detail2_2 = $this->detail2_2;
        $f->link2_2 = $this->link2_2;
        $f->detail2_3 = $this->detail2_3;
        $f->link2_3 = $this->link2_3;
        $f->detail2_4 = $this->detail2_4;
        $f->link2_4 = $this->link2_4;
        $f->detail2_5 = $this->detail2_5;
        $f->link2_5 = $this->link2_5;

        $f->title3 = $this->title3;
        $f->detail3_1 = $this->detail3_1;
        $f->link3_1 = $this->link3_1;
        $f->detail3_2 = $this->detail3_2;
        $f->link3_2 = $this->link3_2;
        $f->detail3_3 = $this->detail3_3;
        $f->link3_3 = $this->link3_3;
        $f->detail3_4 = $this->detail3_4;
        $f->link3_4 = $this->link3_4;
        $f->detail3_5 = $this->detail3_5;
        $f->link3_5 = $this->link3_5;

        $f->title4 = $this->title4;
        $f->detail4_1 = $this->detail4_1;
        $f->link4_1 = $this->link4_1;
        $f->detail4_2 = $this->detail4_2;
        $f->link4_2 = $this->link4_2;
        $f->detail4_3 = $this->detail4_3;
        $f->link4_3 = $this->link4_3;
        $f->detail4_4 = $this->detail4_4;
        $f->link4_4 = $this->link4_4;
        $f->detail4_5 = $this->detail4_5;
        $f->link4_5 = $this->link4_5;


        $f->save();
        session()->flash('message','อัพเดต Footer สำเร็จ');
    }

    public function render()
    {
        return view('livewire.admin.mainpage.footer-component')->layout("layout.navfoot");
    }
}
