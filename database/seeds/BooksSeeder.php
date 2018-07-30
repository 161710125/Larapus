<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
use App\BorrowLog;
use App\User;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sample Penulis
        $author1 = Author::create(['name'=>'Muhammad Gema']);
        $author2 = Author::create(['name'=>'Fikri Haikal']);
        $author3 = Author::create(['name'=>'Junika Berli']);

        //Sample Buku
        $book1 = Book::create(['title'=>'Heem Moal Apal','amount'=>'3','authors_id'=>$author1->id]);
        $book2 = Book::create(['title'=>'Seorang Pemuda Jatuh','amount'=>'2','authors_id'=>$author1->id]);
        $book3 = Book::create(['title'=>'Pria Bernama','amount'=>'4','authors_id'=>$author2->id]);
        $book4 = Book::create(['title'=>'Sesosok Mahkluk Misterius','amount'=>'10','authors_id'=>$author3->id]);

        //Sample User
        $member = User::where('email', 'member@gmail.com')->first();
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book1->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book2->id, 'is_returned' => 0]);
        BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book3->id, 'is_returned' => 1]);
    }
}
