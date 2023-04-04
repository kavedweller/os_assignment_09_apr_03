<?php


namespace models;
class Blog
{
    private $blogs = [];
    private $data  = [];

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'image' => "chini.webp",
                'title' => "চিনি এই আছে, এই নেই, দাম ইচ্ছেমতো",
                'author' => "John Doe",
                'isFeatured' => true,
                'description' => "দেশের প্রধান শেয়ারবাজার ঢাকা স্টক এক্সচেঞ্জে (ডিএসই) লেনদেন বন্ধ রয়েছে। সপ্তাহের প্রথম কার্যদিবসে আজ রোববার নির্ধারিত সময় সকাল সাড়ে ৯ টায় লেনদেন  শুরু করতে পারেনি ডিএসই। তবে দিনের স্বাভাবিক লেনদেন শুরু করতে না পারার আনুষ্ঠানিক কোনো কারণ জানাতে পারেনি সংস্থাটি।"
            ],
            1 => [
                'id' => 2,
                'image' => "share.webp",
                'title' => "প্রধান শেয়ারবাজার ডিএসইতে লেনদেনে বিলম্ব",
                'author' => "John Doe",
                'isFeatured' => false,
                'description' => "রাজধানীর খুচরা দোকানগুলোতে কখনো চিনি পাওয়া যাচ্ছে, কখনো পাওয়া যাচ্ছে না। বিক্রেতারা বলছেন, পাইকারি দোকান থেকে মাঝেমধ্যে তাঁরা চিনি পান। পরিমাণে অল্প। সেই চিনি দ্রুতই বিক্রি হয়ে যায়। ফলে বেশির ভাগ সময় দোকানে চিনি থাকে না।"
            ],
            2 => [
                'id' => 3,
                'image' => "chal.jpg",
                'title' => "বিশ্ববাজারে চাল ও গমের দাম কমছে, বাড়ছে দেশে",
                'author' => "John Doe",
                'isFeatured' => true,

                'description' => "বিশ্ববাজারে চাল ও গমের দাম কমতে শুরু করেছে। কিন্তু দেশের বাজারে উল্টো চিত্র। এক সপ্তাহে গমের দাম বাড়ছে তো আরেক সপ্তাহে চালের দাম বাড়ছে। গত সেপ্টেম্বরে বিশ্ববাজার থেকে বেশি দাম দিয়ে কেনা চাল-গম দেশে আসতে শুরু করেছে। কিন্তু তা বাজারে কোনো প্রভাব ফেলতে পারছে না।"
            ],
            3 => [
                'id' => 4,
                'image' => "high-court.webp",
                'title' => "সমাবেশ-মিছিল নিষিদ্ধ করার বিধান কেন বেআইনি নয়: হাইকোর্ট",
                'author' => "John Doe",
                'isFeatured' => false,
                'description' => "সমাবেশ-মিছিল নিষিদ্ধ করার ক্ষমতা-সংক্রান্ত ঢাকা মহানগর পুলিশ (ডিএমপি) অধ্যাদেশের ২৯ ধারা কেন বেআইনি ঘোষণা করা হবে না, তা জানতে চেয়ে রুল দিয়েছেন হাইকোর্ট।"
            ]
        ];
    }


    public function getAllBlog()
    {
        return $this->blogs;
    }

    public function getFeaturedBlogs()
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['isFeatured'] === true)
            {
                array_push($this->data, $blog);
            }
        }
        return $this->data;
    }


    public function getBlogById($id)
    {
        foreach ($this->blogs as $blog)
        {
            if ($blog['id'] == $id)
            {
                return $blog;
            }
        }

    }
}