@extends('main')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Borrowers Details</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form action="checkl" method="get">
                    <div class="form-group row">
                      <div class="col-md-9">
                        <input type="hidden" name="bookId" id="boo"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="name"  placeholder="Enter name" />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">Mobile Number</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="number" placeholder="Enter Mobile Number"/>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">National ID</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="nationalid" placeholder="Enter National ID"/>
                      </div>
                    </div>
                    <div class="form-group row col-md-9 offset-md-3">
                      <input type="submit" class="btn btn-info" value="Check-out" />
                    </div>
                    </form>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          
                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>  

@endsection