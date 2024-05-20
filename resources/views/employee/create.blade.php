<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a href="{{route('employees.index')}}" class="btn btn-info mb-5">Back</a>
            <form action="{{url('employees-store')}}" method="get">
                @csrf
        
                  <div class=" row p-3">
                    <div class="col-lg-6">
                        <label>First Name *</label>
                        <input type="text" class="form-control" value="" name="first_name" required>
                    </div>
                    <div class="col-lg-6">
                        <label>last Name </label>
                        <input type="text" class="form-control" value="" name="last_name">
                    </div>
                    <div class="col-lg-6">
                        <label>Email *</label>
                        <input type="email" class="form-control" value="" name="email" required>
                    </div>
                    <div class="col-lg-6">
                        <label>password *</label>
                        <input type="password" class="form-control" value="" name="password" required>
                    </div>
                    <div class="col-lg-6">
                        <label>Title *</label>
                        <input type="text" class="form-control" value="" name="title" required>
                    </div>

                    <div class="col-lg-6">
                        <label>City </label>
                        <input type="text" class="form-control" value="" name="city">
                    </div>
                    <div class="col-lg-6">
                        <label>State </label>
                        <input type="text" class="form-control" value="" name="state">
                    </div>
                    <div class="col-lg-6">
                        <label>Under Employee</label>
                        <select type="text" class="form-control" value="" name="link_id">
                            @if($data != "[]")
                            @foreach($data as $key=>$r)
                                <option value="{{$r->id}}"> {{$r->name}} </option>

                            @endforeach
                            @endif

                        </select>
                    </div>

                  </div>
                  <center>
                        <button type="submit" class="btn btn-success mb-5">Save</Button>
                </center>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
