@extends('layouts.app')

@section('content')
  <h1 class="mb-10 text-2xl">Add Review for {{ $book->title }}</h1>

  <form method="POST" action="{{ route('books.reviews.store', $book) }}">
    @csrf

    <!-- Review Textarea with error handling and styling -->
    <div class="mb-4">
      <label for="review">Review</label>
      <textarea name="review" id="review"
        class="input mb-4 border-2 "
        style="{{ $errors->has('review') ? 'border-color: #f56565 !important;' : '' }}"
        rows="10">{{ old('review') }}</textarea>
      @error('review')
        <p class="error text-red-500">{{ $message }}</p>
      @enderror
    </div>

    <!-- Rating Select with error handling and styling -->
    <div class="mb-4">
      <label for="rating">Rating</label>
      <select name="rating" id="rating"
        class="input mb-4 border-2 "
        style="{{ $errors->has('rating') ? 'border-color: #f56565 !important;' : '' }}"
        required>
        <option value="">Select a Rating</option>
        @for ($i = 1; $i <= 5; $i++)
          <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }}</option>
        @endfor
      </select>
      @error('rating')
        <p class="error text-red-500">{{ $message }}</p>
      @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn">Add Review</button>
  </form>
@endsection
