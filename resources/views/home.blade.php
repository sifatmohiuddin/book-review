<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BookVerse – Discover, Review, and Share</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') <!-- Adjust if you’re using different CSS setup -->
</head>

<body class="bg-white text-gray-900">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-6 py-4 shadow-md">
        <div class="text-2xl font-bold text-indigo-600">Book-Worm</div>
        <div class="space-x-6 text-sm font-medium">
            <a href="#" class="hover:text-indigo-600">Home</a>
            <a href="#" class="hover:text-indigo-600">Browse</a>
            <a href="#" class="hover:text-indigo-600">About</a>
        </div>
    </nav>

    <section class="bg-indigo-50 py-20 px-3">
        <div class="max-w-6xl mx-auto text-center mb-6">
            <h2 class="text-3xl font-bold mb-2">🔥 Start Reviewing Now</h2>
            <p class="text-gray-600">See what everyone is reading and reviewing.</p>
        </div>
        <div class="grid md:grid-cols-4 gap-6 max-w-6xl mx-auto ">
            @php
                $books = [
                    [
                        'id' => 1,
                        'image' => '1.jpg',
                        'title' => 'To Kill a Mockingbird',
                        'author' => 'Harper Lee',
                        'review' => '“A timeless story of justice and race.”',
                    ],
                    [
                        'id' => 2,
                        'image' => '2.jpg',
                        'title' => '1984',
                        'author' => 'George Orwell',
                        'review' => '“Hauntingly relevant dystopian classic.”',
                    ],
                    [
                        'id' => 3,
                        'image' => '3.jpg',
                        'title' => 'The Great Gatsby',
                        'author' => 'F. Scott Fitzgerald',
                        'review' => '“A poetic dive into wealth and illusion.”',
                    ],
                    [
                        'id' => 4,
                        'image' => '4.jpg',
                        'title' => 'The Help',
                        'author' => 'Kathryn Stockett',
                        'review' => '“Powerful and moving voices of change.”',
                    ],
                ];
            @endphp

            @foreach ($books as $book)
                <a href="{{ url('books/' . $book['id']) }}"
                    class="block bg-white shadow rounded-xl overflow-hidden h-[460px] hover:shadow-lg transition duration-200">
                    <img src="{{ asset('images/' . $book['image']) }}" alt="{{ $book['title'] }}"
                        class="w-full h-70 object-cover">
                    <div class="p-2">
                        <h3 class="font-semibold">{{ $book['title'] }}</h3>
                        <p class="text-sm text-gray-500">by {{ $book['author'] }}</p>
                        <p class="mt-2 text-sm text-gray-700">{{ $book['review'] }}</p>
                    </div>
                </a>
            @endforeach


        </div>
        <div class="text-center py-20 px-6 ">

            <p class="text-lg text-gray-700 max-w-xl mx-auto mb-2">
                Honest reviews. Thoughtful recommendations. A community that loves to read as much as you do.
            </p>
            <a href="#"
                class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-xl text-lg hover:bg-indigo-700 transition">
                Browse More
            </a>
        </div>

    </section>




    <!-- Features -->
    <section class="py-20 px-6 max-w-6xl mx-auto grid md:grid-cols-3 gap-10 text-center">
        <div>
            <div class="text-4xl mb-4 text-indigo-600">🔍</div>
            <h3 class="text-xl font-semibold mb-2">Explore Reviews</h3>
            <p class="text-gray-600">Find detailed and honest reviews from readers like you across all genres.</p>
        </div>
        <div>
            <div class="text-4xl mb-4 text-indigo-600">✍️</div>
            <h3 class="text-xl font-semibold mb-2">Write & Share</h3>
            <p class="text-gray-600">Write your thoughts, rate books, and share your opinions with the community.
            </p>
        </div>
        <div>
            <div class="text-4xl mb-4 text-indigo-600">📈</div>
            <h3 class="text-xl font-semibold mb-2">Track Your Reading</h3>
            <p class="text-gray-600">Log books, set reading goals, and see your progress over time.</p>
        </div>
    </section>

    <!-- Popular Books -->

    <!-- Newsletter -->
    <section class="py-20 px-6 text-center bg-indigo-600 text-white">
        <h2 class="text-3xl font-bold mb-4">📬 Join Our Newsletter</h2>
        <p class="mb-6">Get book recommendations, reviews, and reading tips delivered to your inbox.</p>
        <form action="#" method="POST" class="max-w-md mx-auto flex flex-col sm:flex-row gap-3">
            <input type="email" placeholder="Your email" class="px-4 py-3 rounded-md text-gray-900 w-full" required>
            <button type="submit"
                class="bg-white text-indigo-700 font-semibold px-6 py-3 rounded-md hover:bg-gray-100 transition">
                Subscribe
            </button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="py-10 px-6 text-center text-sm text-gray-500">
        © {{ date('Y') }} BookVerse. All rights reserved.
    </footer>

</body>

</html>
