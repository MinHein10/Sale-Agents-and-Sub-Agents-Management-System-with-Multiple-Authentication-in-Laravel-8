@extends('templates.main')
@section('content')



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Agents Page</h4>

                <form action="{{route('manageagent.store')}}" method="POST" class="outer-repeater">
                    @csrf
                    <div data-repeater-list="outer-group" class="outer">
                        <div data-repeater-item class="outer">
                            {{-- Agent Name --}}
                            <div class="form-group">
                                <label for="agentname">Agent Name :</label>
                                <input type="text" class="form-control" name="agentname" id="agentname" placeholder="Enter Agent Name...">
                            </div>
                            {{-- Agent Name --}}
                            
                            {{-- Region --}}
                            <div class="form-group">
                                {{-- <input type="text" name="township" id="township" class="form-control @error('township') is-invalid @enderror" required autocomplete="name" autofocus> --}}
                                <label for="select-region">Select Region :</label>
                                
                                    <select class="form-control" id="select-region" name="region">
                                        @foreach ($regions as $region)
                                        <option value="{{ $region['name'] }}" data-id="{{ $region['id'] }}">
                                            {{ $region['name'] }}</option>
                                        @endforeach
                                    </select>        
                            </div>
                            {{-- Region --}}
                            <br>
                            {{-- Township --}}
                            <div class="form-group">
                                <label for="select-township">Select Township</label>
                                        <select class="form-control" id="select-township" name="township">
                                            <option selected>Please select region first</option>
                                        </select>
                            </div>
                            {{-- Township --}}
                            <br>
                            {{-- phno --}}
                            <div class="form-group">
                                <label for="phno">Ph No :</label>
                                <input type="text" class="form-control" name="phno" id="phno" placeholder="Enter Phone Number ...">
                            </div>
                            {{-- phno --}}
                            <br>
                            {{-- address --}}
                            <div class="form-group">
                                <label for="address">Address :</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address...">
                            </div>
                            {{-- address --}}
                            <br>
                            {{-- Email --}}
                            <div class="form-group">
                                <label for="formemail">Email :</label>
                                <input type="email" name="email" class="form-control" id="formemail" placeholder="Enter your Email...">
                            </div>
                            {{-- Email --}}
                            <br>
                            {{-- Password --}}
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" name="password" id="password" placeholder="Enter Password..." class="form-control">
                            </div>
                            {{-- Password --}}
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
    
@endsection