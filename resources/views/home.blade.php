@extends('main')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           
                
              <div class="card-body">
            
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Book title</th>
                      <th scope="col">ISBN</th>
                      <th scope="col">Publish Year</th>
                      <th scope="col">Cover Price</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach ($books as $book): ?>
                    <tr>
                      <td ><input type="checkbox" class="checkoption" id={{$book->id}}></td>
                      <td id={{$st = "b".$book->id."t"}}>{{ $book->book_title }}</td>
                      <td id={{$st = "b".$book->id."i"}}>{{ $book->isbn }}</td>
                      <td id={{$st = "b".$book->id."p"}}>{{ $book->publish_year }}</td>
                      <td id={{$st = "b".$book->id."c"}}>{{ $book->cover_price }}</td>
                      <td id={{$st = "b".$book->id."s"}}>{{ $book->status }}</td>
                    </tr>
                  <?php endforeach ?>
                    
                   
                    
                  </tbody>
                </table> 

                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                  <center><br />
                  <button class="btn btn-outline-primary" id="in">check-in</button>
                  <button class="btn btn-outline-primary" id="out">check-out</button>
                  <button class="btn btn-outline-primary" id="details">Details</button>
                  </center>
              </div>
        
          </div>
        </div>
      </div>
    </main>

@endsection