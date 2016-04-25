<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Work;
use App\Review;
use App\Link;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('WorksTableSeeder');
        $this->call('ReviewsTableSeeder');
        $this->call('LinksTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('ArticlesTableSeeder');
    }
}

class WorksTableSeeder extends Seeder
{
    public function run() {
        Work::create([
            'title' => 'Dominion',
            'alias' => 'dominion',
            'short_description' => "A fantasy adventure set in a world where airships ply the air for spirits to power their strange machines.",
            'long_description' => "A fantasy adventure set in a world where airships ply the air for spirits to power their strange machines. A young girl trying to preserve her family airship must fight against a tycoon who threatens this world's way of life.  Bla, bla, more...",
            'publish_date' => DateTime::createFromFormat("Y-m-d", "2015-05-01")
        ]);
        
        Work::create([
            'title' => 'Dreams of Stone',
            'alias' => 'stone',
            'short_description' => "A cross-Canada journey through a landscape transformed by magic.",
            'long_description' => "A journey of magical discovery that sends a young hero across Canada in his attempt to stop creatures of legend from awakening the power within ordinary men and women.  Bla, bla, more...",
            'publish_date' => DateTime::createFromFormat("Y-m-d", "2004-05-01")
        ]);
    }
}

class TagsTableSeeder extends Seeder {
    public function run() {
        Tag::create(['name' => 'news']);
        Tag::create(['name' => 'events']);
        Tag::create(['name' => 'dominion']);
        Tag::create(['name' => 'personal']);
        Tag::create(['name' => 'writing']);
    }
}

class LinksTableSeeder extends Seeder {
    public function run() {
        // url, type, descr, work_id
        $works = Work::lists('id', 'alias');
        
        Link::create([
            "url" => "https://www.amazon.ca",
            "type" => "amazon",
            "description" => "Purchase on Amazon",
            "work_id" => $works['stone']
        ]);
        
        Link::create([
            "url" => "https://www.amazon.ca",
            "type" => "amazon",
            "description" => "Purchase on Amazon",
            "work_id" => $works['dominion']
        ]);
        
        Link::create([
            "url" => "https://www.amazon.ca",
            "type" => "library",
            "description" => "Find in the Guelph Library",
            "work_id" => $works['dominion']
        ]);
        
        Link::create([
            "url" => "https://www.amazon.ca",
            "type" => "publisher",
            "description" => "Purchase from the Publisher",
            "work_id" => $works['dominion']
        ]);
    }
}

class ReviewsTableSeeder extends Seeder {
    public function run() {
        $works = Work::lists('id', 'alias');
        
        // 'work_id', 'source', 'link', 'importance', 'body'
        Review::create([
            'work_id' => $works['dominion'],
            'source' => 'Library critic Steve Stevish',
            'link' => null,
            'importance' => 5,
            'body' => "An amazing read!  I couldn't put it down!"
        ]);
        
        Review::create([
            'work_id' => $works['dominion'],
            'source' => 'Sue Susans, Proffesional magazine of Proffesionals',
            'link' => "https://www.amazon.ca",
            'importance' => 6,
            'body' => "My kids love this, and so did I - I can't wait to see what happens next!"
        ]);
        
        Review::create([
            'work_id' => $works['dominion'],
            'source' => 'Jack Jackson, Rolling Stone Magazine',
            'link' => "https://www.amazon.ca",
            'importance' => 7,
            'body' => "A deep examination of the underpinnings of underpinnings themselves :P"
        ]);
    }
}

class ArticlesTableSeeder extends Seeder {
    public function run() {
        $tags = Tag::lists('id', 'name');
        
        // title, alias, importance, body
        $release = Article::create([
            'title' => "The Big Release!",
            'alias' => 'dominionrelease',
            'importance' => 5,
            'body' => "Hi everyone, just a reminder that Dominion is going to be released next week! Stay tuned here fore where you can find your copy!"
        ]);
        $release->tags()->attach([$tags['dominion'], $tags['news']]);
        
        $editing = Article::create([
            'title' => "Editing Dominion II",
            'alias' => 'editingdominion',
            'importance' => 2,
            'body' => "My editor and I have started our rounds of editing for the sequel to Dominion.  Exciting stuff!"
        ]);
        $editing->tags()->attach([$tags['dominion'], $tags['writing']]);
        
        $complaint = Article::create([
            'title' => "Writing is hard",
            'alias' => 'hardgoing',
            'importance' => 4,
            'body' => "Man, I just don't feel like writing!"
        ]);
        $complaint->tags()->attach([$tags['personal'], $tags['writing']]);
    }
}
