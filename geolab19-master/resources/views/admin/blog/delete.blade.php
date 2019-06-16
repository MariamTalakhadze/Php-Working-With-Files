@extends("layouts.admin")


@section("content")
<div class="container">
    <div class="row">
       @if ($errors->any())
           <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
           </div><br />
       @endif
        
        <div class="col-md-12">
        <h4>All Blogs</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                    <th>Title</th>
                     <th>Sub_Title</th>
                     <th>Author</th>
                     <th>return to admin</th>
                      <th>return to homepage</th>
                       <th>Delete permanent</th>
                   </thead>
    <tbody>
    
    @foreach ($blogs as $string)
    <tr>
     <td>{{$string->title}}</td>
     <td>{{$string->sub_title}}</td>
     <td>{{$string->author}}</td>
     <td> @if ($string->is_published==1)
         yes              
         @else
          no   
         @endif
   </td>
   {{--  --}}
    <td><form action={{ route('admin.blog.confirmFromAdmin', $string->id) }} method="POST">
     @csrf
       <button type="submit"class="btn btn-success btn-xs">toadmin</button>
     </form></td>
     <td><form  action={{ route('admin.blog.returnToAdmin', $string->id) }} method="POST" >
         @csrf
           <button type="submit"class="btn btn-primary btn-xs"> tohome</button>
         </form></td>
     <td><form  action={{ route('admin.blog.destroy', $string->id) }} method="POST">
     @csrf
       <button type="submit"class="btn btn-danger btn-xs">Delete</button>
     </form></td>
   </tr> 
    @endforeach
    </tbody>
        
</table>
            </div>
        </div>
    </div>
</div> 
@endsection


@section("scripts")
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
<script>
  $(function () {

    CKEDITOR.replace('editor1')

    $('[data-mask]').inputmask();

  })

  

</script>


@endsection
