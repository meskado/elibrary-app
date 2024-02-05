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
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ $borrow[0]->name}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Mobile Number</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ $borrow[0]->mobile_no}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Actual return date</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ date('Y-m-d')}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Required return date of the book</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{ $borrow[0]->return_date}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Penalty</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">
                          <?php
                             if(date('Y-m-d') > $borrow[0]->return_date){
                              echo "#500";
                             }
                             else{
                              echo "No Penalty";
                             }
                          ?>
                        </p>
                      </div>
                    </div>
                    
                    <hr>
                    
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
