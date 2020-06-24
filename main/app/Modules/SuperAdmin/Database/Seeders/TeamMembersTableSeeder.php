<?php
namespace App\Modules\SuperAdmin\Database\Seeders;

use Illuminate\Database\Seeder;

class TeamMembersTableSeeder extends Seeder
{

  /**
   * Auto generated seed file
   *
   * @return void
   */
  public function run()
  {


    \DB::table('team_members')->delete();

    \DB::table('team_members')->insert(array(
      0 =>
      array(
        'id' => 1,
        'name' => 'Channing Bridges',
        'job_title' => 'Omnis aut culpa sus',
        'phone' => '+1 (905) 302-5958',
        'email' => 'wyvylupot@mailinator.com',
        'job_description' => '<div><br></div><div>Warwick Meadows is a 22-year-old P.P.E. student who enjoys social card games, painting and drone photography. He is kind and inspiring, but can also be very pessimistic and a bit impatient.</div><div><br></div><div><br></div><div><br></div><div>He is an Irish Hindu who defines himself as straight. He is currently at college. studying philosophy, politics and economics. He has a severe phobia of butterflies</div><div><br></div><div>Physically, Warwick is in pretty good shape. He is tall with walnut skin, black hair and brown eyes.</div><div><br></div><div>He grew up in an upper class neighbourhood. After his father died when he was young, he was raised by his mother</div><div><br></div><div>He is currently in a relationship with Orla Sheila Lee. Orla is the same age as him and works as a student.</div><div>Warwick grew up in a wealthy neighbourhood. After his father died when he was young, he was raised by his mother</div><div>Warwick best friend is a P.P.E. student called Henley Robinson. They get on well most of the time. He also hangs around with Shauna Johnson and Marvin O\'Gallagher. They enjoy meditation together.</div>',
        'img_url' => '/img/profile-photos/AIArhxdD9BX2JyduhRPpduW7gtX3mUuLNv4GtVvA.png',
        'thumb_url' => '/img/profile-photos/thumbs/AIArhxdD9BX2JyduhRPpduW7gtX3mUuLNv4GtVvA.png',
        'created_at' => '2020-06-24 11:35:15',
        'updated_at' => '2020-06-24 11:35:15',
      ),
      1 =>
      array(
        'id' => 2,
        'name' => 'Sophia Una Parker',
        'job_title' => 'Omnis aut culpa sus',
        'phone' => '+1 (905) 302-5958',
        'email' => 'wyvylupot@mailinator.com',
        'job_description' => '<p style="color: rgb(0, 0, 0); font-family: Raleway, Helvetica, sans-serif; font-size: 21.3333px; background-color: rgb(230, 233, 237);">Sophia Una Parker is a 21-year-old local activist who enjoys baking, vandalising bus stops and going to the movies. She is bright and considerate, but can also be very boring and a bit violent.</p><p style="color: rgb(0, 0, 0); font-family: Raleway, Helvetica, sans-serif; font-size: 21.3333px; background-color: rgb(230, 233, 237);">She is a Cornish Christian who defines herself as straight. She didn\'t finish school. She is a vegan.</p><p style="color: rgb(0, 0, 0); font-family: Raleway, Helvetica, sans-serif; font-size: 21.3333px; background-color: rgb(230, 233, 237);">Physically, Sophia is in pretty good shape. She is very tall with dark chocolate skin, grey hair and black eyes.</p><p style="color: rgb(0, 0, 0); font-family: Raleway, Helvetica, sans-serif; font-size: 21.3333px; background-color: rgb(230, 233, 237);">She grew up in a middle class neighbourhood. She was raised by her mother, her father having left when she was young.</p><p style="color: rgb(0, 0, 0); font-family: Raleway, Helvetica, sans-serif; font-size: 21.3333px; background-color: rgb(230, 233, 237);">She is currently in a relationship with Hector Erica Chambers. Hector is 20 years older than her and works as a journalist.</p><p style="color: rgb(0, 0, 0); font-family: Raleway, Helvetica, sans-serif; font-size: 21.3333px; background-color: rgb(230, 233, 237);">Sophia\'s best friend is a local activist called Jerome Howard. They get on well most of the time. She also hangs around with Annabelle Bates and Grace Beattie. They enjoy repressing minorities together.</p>',
        'img_url' => '/img/profile-photos/ac9LZuviZWCzASe5KwMfiimoQtN7xm4xmNz5STn5.png',
        'thumb_url' => '/img/profile-photos/thumbs/ac9LZuviZWCzASe5KwMfiimoQtN7xm4xmNz5STn5.png',
        'created_at' => '2020-06-24 11:36:41',
        'updated_at' => '2020-06-24 11:36:41',
      ),
      2 =>
      array(
        'id' => 3,
        'name' => 'Reginald Garth Bishop',
        'job_title' => 'Omnis aut culpa sus',
        'phone' => '+1 (905) 302-5958',
        'email' => 'wyvylupot@mailinator.com',
        'job_description' => '<p style=""><br></p><p style="">Reginald Garth Bishop is a 20-year-old business studies student whose life is dominated by solving the murder of his friend, Gilbert Gibson. Gilbert was suffocated in 2013 and the killer was never brought to justice.</p><p style="">He is Caymanian who defines himself as straight. He is currently at college. studying business studies.</p><p style="">Physically, Reginald is slightly overweight but otherwise in good shape. He is very short with light skin, brown hair and green eyes.</p><p style="">He grew up in a working class neighbourhood. His father left when he was young, leaving him with his mother, who was an addict.</p><p style="">He is currently single. His most recent romance was with a student called Michelle Marie Day, who was the same age as him. They broke up because Michelle couldn\'t deal with Reginald\'s obsession with Gilbert\'s death.</p><p style="">Reginald\'s best friend is a business studies student called Carly Craig. They have a very firey friendship. He also hangs around with a business studies student called Kayleigh Saunders. They enjoy meditation together.</p>',
        'img_url' => '/img/profile-photos/IXIaj61BeBpFVjDkW0dWVLIx3DQk6jCtVZ8QJcly.png',
        'thumb_url' => '/img/profile-photos/thumbs/IXIaj61BeBpFVjDkW0dWVLIx3DQk6jCtVZ8QJcly.png',
        'created_at' => '2020-06-24 11:38:06',
        'updated_at' => '2020-06-24 11:38:06',
      ),
      3 =>
      array(
        'id' => 4,
        'name' => 'Will Tony Snozcumber',
        'job_title' => 'Ut vitae voluptas mo',
        'phone' => '+1 (479) 219-6917',
        'email' => 'rixyb@mailinator.net',
        'job_description' => '<p><br></p><p>Will Tony Snozcumber is a 45-year-old professional sports person who enjoys playing video games, running and recycling. He is entertaining and reliable, but can also be very unstable and a bit untidy.</p><p>He is an American Christian who defines himself as bisexual. He started studying sports science at college but never finished the course.</p><p>Physically, Will is not in great shape. He needs to lose quite a lot of weight. He is short with fair skin, brown hair and green eyes.</p><p>He grew up in an upper class neighbourhood. After his mother died when he was young, he was raised by his father</p><p>He is currently in a relationship with Sapphire Olivia Barnes. Sapphire is 8 years older than him and works as an electrician.</p><p>Will\'s best friend is a professional sports person called Kiara Foster. They get on well most of the time. He also hangs around with a professional sports person called Lennon Scott. They enjoy spreading fake news on Facebook together.</p>',
        'img_url' => '/img/profile-photos/1zVovoCstBzJOAjNfBvO1xoIqMBsC4MpcJKJpe0G.png',
        'thumb_url' => '/img/profile-photos/thumbs/1zVovoCstBzJOAjNfBvO1xoIqMBsC4MpcJKJpe0G.png',
        'created_at' => '2020-06-24 11:40:38',
        'updated_at' => '2020-06-24 11:40:38',
      ),
      4 =>
      array(
        'id' => 5,
        'name' => 'Christian Harry Blast',
        'job_title' => 'Odio aut exercitatio',
        'phone' => '+1 (677) 986-2887',
        'email' => 'pusykinidi@mailinator.net',
        'job_description' => '<p><br></p><p style="">Christian Harry Blast is a 30-year-old government politician who enjoys listening to music, bargain hunting and yoga. He is stable and inspiring, but can also be very unkind and a bit disloyal.</p><p style="">He has had three affairs so far. Most recently he cheated on girlfriend, Kai, with 37-year-old legal secretary, Nia Bennett. He is now in a relationship with Nia.</p><p style="">He is a Welsh Muslim who defines himself as straight. He started studying philosophy, politics and economics at college but never finished the course.</p><p style="">Physically, Christian is slightly overweight but otherwise in good shape. He is tall with olive skin, red hair and green eyes.</p><p style="">He grew up in a working class neighbourhood. His parents separated when he was small, but remained friends and provided a happy, stable home.</p><p style="">He is currently in a relationship with Nia Kendra Bennett. Nia is 10 years older than him and works as a legal secretary.</p><p style="">Christian\'s best friend is a government politician called Rhian Gough. They get on well most of the time. He also hangs around with Tony Morris and Ellis Hughes. They enjoy relaxing together.</p>',
        'img_url' => '/img/profile-photos/bk6G502ZzNSXUrKSpI6cuE3g5XGXEodTCFpqNzSm.png',
        'thumb_url' => '/img/profile-photos/thumbs/bk6G502ZzNSXUrKSpI6cuE3g5XGXEodTCFpqNzSm.png',
        'created_at' => '2020-06-24 11:41:58',
        'updated_at' => '2020-06-24 11:41:58',
      ),
      5 =>
      array(
        'id' => 6,
        'name' => 'Paul Ryan, 21',
        'job_title' => 'Professor',
        'phone' => '+1 (592) 284-7221',
        'email' => 'fupewo@mailinator.net',
        'job_description' => '<h4 style="padding: 0px; margin-right: 0px; margin-bottom: 4px; margin-left: 0px;"><br></h4><span style="text-align: center;">Paul Ryan is a helpful man from the moon who can only swim when facing north. He has crazy, blue hair. He comes from a troubled family. He is hiding a terrible secret concerning the future.</span>',
        'img_url' => '/img/profile-photos/srZhp9SsvoCbiXKpWbCT4R6mLaMH4NGjppXbVWIZ.png',
        'thumb_url' => '/img/profile-photos/thumbs/srZhp9SsvoCbiXKpWbCT4R6mLaMH4NGjppXbVWIZ.png',
        'created_at' => '2020-06-24 11:43:56',
        'updated_at' => '2020-06-24 11:43:56',
      ),
      6 =>
      array(
        'id' => 7,
        'name' => 'Dale Johnson',
        'job_title' => 'Quam excepturi quam',
        'phone' => '+1 (553) 795-4194',
        'email' => 'tudomuquba@mailinator.com',
        'job_description' => '<p><br></p><p><span style="text-align: center;">Dale Johnston is a silly woman from New York who can only laugh by day. She looks like she needs a good night\'s sleep. She comes from a happy family. She must use her talent for campaigning to heal the people around her before she can work on her own problems.</span><br></p>',
        'img_url' => '/img/profile-photos/GiNmuA2jYesjUa7C0YkFdqaf0LIOJUTPwx4OQOX6.png',
        'thumb_url' => '/img/profile-photos/thumbs/GiNmuA2jYesjUa7C0YkFdqaf0LIOJUTPwx4OQOX6.png',
        'created_at' => '2020-06-24 11:44:48',
        'updated_at' => '2020-06-24 11:44:48',
      ),
    ));
  }
}
