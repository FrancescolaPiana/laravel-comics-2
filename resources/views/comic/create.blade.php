@extends('layouts.app')

@section('content')
<div class="container mine">
    <form action="{{route('comic.store')}}" method="POST">
        @csrf
        {{-- <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" class="form-control" />
              <label class="form-label" for="form6Example1">First name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example2" class="form-control" />
              <label class="form-label" for="form6Example2">Last name</label>
            </div>
          </div>
        </div>
       --}}
        <!-- Text title -->
        <div class="form-outline mb-4">
          <input type="text" id="title" name="title" placeholder="Title"  class="form-control" />
        </div>
      
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="url" name="url" placeholder="Url"  class="form-control" />
        </div>
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" id="series" name="series" placeholder="Series" class="form-control" />
        </div>
      
        <!-- Number input -->
        <div class="form-outline mb-4">
          <input type="text" id="price" name="price" placeholder="Price"  class="form-control" />
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
            <input type="text" id="saledate" name="saledate" placeholder="Sale Date"  class="form-control" />
          </div>

               
        <!-- Message input -->
        <div class="form-outline mb-4">
            <input type="text" id="type" name="type" placeholder="Type"  class="form-control" />
          </div>
      
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="description" name="description" placeholder="Description" rows="4"></textarea>
        </div>

        <!-- Submit button -->
        <button type="submit" value="invia" class="btn btn-primary btn-block mb-4">Create</button>
      </form>
</div>
@endsection