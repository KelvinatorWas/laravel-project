<?php

namespace Database\Seeders;

use App\Models\User;
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create([
            "name" => "Walter White",
            "email" => "walterwhite@gmail.com",
            "password" => bcrypt("walterhwhite"),
        ]);

        Listing::factory(6)->create([
            "user_id" => $user->id
        ]);
        
        /*
        Listing::create([
            "title" => "Senior Software Engineer",
            "tags" => "Software Development, Engineering, Full Stack",
            "company" => "Tech Innovations Inc.",
            "location" => "San Francisco, CA",
            "email" => "careers@techinnovations.com",
            "website" => "www.techinnovations.com",
            "description" => "Tech Innovations Inc. is seeking a highly skilled Senior Software Engineer to join our dynamic team. The ideal candidate should have a strong background in software development, with expertise in full-stack development methodologies. This role offers the opportunity to work on cutting-edge projects and collaborate with talented professionals in a fast-paced environment."
        ]);

        Listing::create([
            "title" => "Marketing Manager",
            "tags" => "Marketing, Management, Digital Marketing",
            "company" => "Global Marketing Solutions Ltd.",
            "location" => "New York City, NY",
            "email" => "careers@globalmarketingsolutions.com",
            "website" => "www.globalmarketingsolutions.com",
            "description" => "Global Marketing Solutions Ltd. is looking for an experienced Marketing Manager to oversee our marketing campaigns and strategies. The ideal candidate will have a proven track record in digital marketing, with strong leadership skills to manage a team effectively. This position offers the opportunity to spearhead innovative marketing initiatives and drive business growth in a competitive market landscape."
        ]);


        Listing::create([
            "title" => "Data Scientist",
            "tags" => "Data Science, Machine Learning, Analytics",
            "company" => "Data Insights Co.",
            "location" => "Seattle, WA",
            "email" => "careers@datainsights.com",
            "website" => "www.datainsights.com",
            "description" => "Data Insights Co. is seeking a talented Data Scientist to join our analytics team. The ideal candidate should have a strong background in data science and machine learning, with experience in analyzing large datasets and developing predictive models. This role offers the opportunity to work on exciting projects and drive data-driven decision-making processes."
        ]);
        */

    }
}
