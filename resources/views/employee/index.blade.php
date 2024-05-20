<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a href="{{route('employees.create')}}" class="btn btn-success mb-5">Add Employee</a>
                 <table class="table w-100" id="example">
                 <thead>
                    <tr>

                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Title</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Under Link</th>
                    <!-- <th>Action</th> -->

                    </tr>
                    </thead>
                    @if($data != "[]")
                    <tbody>
                        
                        @foreach($data as $key=>$value)
                        <tr>
                            <td> {{$value->first_name}} </td>
                            <td> {{$value->last_name}} </td>
                            <td> {{$value->title}} </td>
                            <td> {{$value->city}} </td>
                            <td> {{$value->state}} </td>
                            <td> <?php $link=DB::table('users')->where('id',$value->link_id)->first(); 
                            if($link != null){
                                echo($link->name);
                            }
                            ?></td>
                            <!-- <td> 
                                 <a href="" class="btn btn-info">Edit</a>
                        </td> -->
                        </tr>
                        @endforeach

                    </tbody>
                    @endif

                 </table>
            </div>
        </div>
    </div>

</x-app-layout>
