<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'category_id' => 1, // Fiksi Ilmiah
                'title' => 'Dune',
                'author' => 'Frank Herbert',
                'publisher' => 'Chilton Books',
                'publication_year' => 1965,
                'description' => 'Sebuah novel epik fiksi ilmiah yang berlatar di planet gurun Arrakis.',
            ],
            [
                'category_id' => 1,
                'title' => 'Foundation',
                'author' => 'Isaac Asimov',
                'publisher' => 'Gnome Press',
                'publication_year' => 1951,
                'description' => 'Kisah tentang keruntuhan Galactic Empire dan upaya menyelamatkan pengetahuan.',
            ],
            [
                'category_id' => 1,
                'title' => 'Neuromancer',
                'author' => 'William Gibson',
                'publisher' => 'Ace Books',
                'publication_year' => 1984,
                'description' => 'Novel cyberpunk perintis tentang seorang hacker di dunia virtual.',
            ],
            [
                'category_id' => 2, // Fantasi
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'publisher' => 'George Allen & Unwin',
                'publication_year' => 1937,
                'description' => 'Petualangan Bilbo Baggins menuju Gunung Erebor.',
            ],
            [
                'category_id' => 2,
                'title' => 'A Game of Thrones',
                'author' => 'George R.R. Martin',
                'publisher' => 'Bantam Spectra',
                'publication_year' => 1996,
                'description' => 'Perjuangan kekuasaan di tujuh kerajaan Westeros.',
            ],
            [
                'category_id' => 2,
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'author' => 'J.K. Rowling',
                'publisher' => 'Bloomsbury',
                'publication_year' => 1997,
                'description' => 'Kisah anak penyihir yang memulai petualangannya di Hogwarts.',
            ],
            [
                'category_id' => 3, // Sejarah
                'title' => 'Sapiens',
                'author' => 'Yuval Noah Harari',
                'publisher' => 'Harper',
                'publication_year' => 2011,
                'description' => 'Sejarah singkat umat manusia dari zaman batu hingga modern.',
            ],
            [
                'category_id' => 3,
                'title' => 'Guns, Germs, and Steel',
                'author' => 'Jared Diamond',
                'publisher' => 'W.W. Norton',
                'publication_year' => 1997,
                'description' => 'Mengapa peradaban tertentu lebih maju dari yang lain.',
            ],
            [
                'category_id' => 4, // Biografi
                'title' => 'Steve Jobs',
                'author' => 'Walter Isaacson',
                'publisher' => 'Simon & Schuster',
                'publication_year' => 2011,
                'description' => 'Biografi resmi pendiri Apple.',
            ],
            [
                'category_id' => 4,
                'title' => 'Long Walk to Freedom',
                'author' => 'Nelson Mandela',
                'publisher' => 'Little, Brown and Company',
                'publication_year' => 1994,
                'description' => 'Autobiografi Nelson Mandela.',
            ],
            [
                'category_id' => 5, // Teknologi
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'publisher' => 'Prentice Hall',
                'publication_year' => 2008,
                'description' => 'Panduan menulis kode yang bersih dan mudah dibaca.',
            ],
            [
                'category_id' => 5,
                'title' => 'The Pragmatic Programmer',
                'author' => 'David Thomas & Andrew Hunt',
                'publisher' => 'Addison-Wesley',
                'publication_year' => 1999,
                'description' => 'Panduan menjadi programmer yang pragmatis.',
            ],
            [
                'category_id' => 6, // Filsafat
                'title' => 'Meditations',
                'author' => 'Marcus Aurelius',
                'publisher' => 'Various',
                'publication_year' => 180,
                'description' => 'Catatan refleksi filsafat Stoik oleh Kaisar Romawi.',
            ],
            [
                'category_id' => 6,
                'title' => 'Beyond Good and Evil',
                'author' => 'Friedrich Nietzsche',
                'publisher' => 'C.G. Naumann',
                'publication_year' => 1886,
                'description' => 'Kritik terhadap moralitas tradisional.',
            ],
            [
                'category_id' => 7, // Psikologi
                'title' => 'Thinking, Fast and Slow',
                'author' => 'Daniel Kahneman',
                'publisher' => 'Farrar, Straus and Giroux',
                'publication_year' => 2011,
                'description' => 'Dua sistem berpikir yang menggerakkan keputusan manusia.',
            ],
            [
                'category_id' => 7,
                'title' => 'Man\'s Search for Meaning',
                'author' => 'Viktor E. Frankl',
                'publisher' => 'Beacon Press',
                'publication_year' => 1946,
                'description' => 'Mencari makna hidup di tengah penderitaan.',
            ],
            [
                'category_id' => 8, // Sains
                'title' => 'A Brief History of Time',
                'author' => 'Stephen Hawking',
                'publisher' => 'Bantam Books',
                'publication_year' => 1988,
                'description' => 'Penjelasan kosmologi untuk pembaca umum.',
            ],
            [
                'category_id' => 8,
                'title' => 'The Selfish Gene',
                'author' => 'Richard Dawkins',
                'publisher' => 'Oxford University Press',
                'publication_year' => 1976,
                'description' => 'Teori evolusi dari perspektif gen.',
            ],
            [
                'category_id' => 9, // Bisnis
                'title' => 'Zero to One',
                'author' => 'Peter Thiel',
                'publisher' => 'Crown Business',
                'publication_year' => 2014,
                'description' => 'Catatan tentang startup dan masa depan.',
            ],
            [
                'category_id' => 10, // Sastra Klasik
                'title' => '1984',
                'author' => 'George Orwell',
                'publisher' => 'Secker & Warburg',
                'publication_year' => 1949,
                'description' => 'Distopia tentang totalitarianisme dan pengawasan.',
            ],
            [
                'category_id' => 10,
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'publisher' => 'J.B. Lippincott & Co.',
                'publication_year' => 1960,
                'description' => 'Kisah ketidakadilan rasial di Amerika Selatan.',
            ],
            [
                'category_id' => 9,
                'title' => 'Good to Great',
                'author' => 'Jim Collins',
                'publisher' => 'HarperBusiness',
                'publication_year' => 2001,
                'description' => 'Mengapa beberapa perusahaan melompat dari baik ke hebat.',
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
