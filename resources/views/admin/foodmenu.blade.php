<x-app-layout>

</x-app-layout>



@include('admin.admincss')


@include('admin.navbar')
<div>
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Write a title" required>
        </div>
        <div>
            <label for="">Price</label>
            <input type="num" name="price" required>
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Write a description" required>
        </div>
        <div>
            <input type="submit" name="" id="" value="Save">
        </div>
    </form>
</div>

@include('admin.adminjs')
