@extends('dashboard.index')
@section('aduh')

<table class="table table-responsive-sm  mt-2">
  <thead class="thead-light rd">
    <tr>
      <th scope="col"></th>
      <th scope="col">Logo
        <a data-toggle="modal" data-target="#logo"><i class='bx bx-plus text-danger' ></i> </a>
    
      </th>
      <th scope="col">Logo link</th>
      <th scope="col ">Item   <a href=""><i class='bx bx-plus ' ></i> </a>
  
      <th scope="col">Link</th>
      <th scope="col">button name   <a href=""><i class='bx bx-plus ' ></i> </a>
      
      <th scope="col">button link</th>
      <th scope="col">icon cart   <a href=""><i class='bx bx-plus ' ></i> </a>
  
      <th scope="col">icon link</th>
    </tr>
  </thead>
  <tbody class="text-light">
    <tr>
      <th scope="row">1</th>
      <td>  image 
        <a data-toggle="modal" data-target="#update"><i class='bx bx-edit ' ></i></a>
        <a href=""><i class='bx bx-trash ' ></i></a> </td>
      <td>image link
        <a data-toggle="modal" data-target="#update"><i class='bx bx-edit ' ></i></a>
        <a href=""><i class='bx bx-trash ' ></i></a>
      </td>
      <td>item
        <a data-toggle="modal" data-target="#update"><i class='bx bx-edit ' ></i></a>
        <a href=""><i class='bx bx-trash ' ></i></a>
      </td>
      <td>link
        <a data-toggle="modal" data-target="#update"><i class='bx bx-edit ' ></i></a>
        <a href=""><i class='bx bx-trash ' ></i></a>
      </td>
      <td>btnname      <a data-toggle="modal" data-target="#update"><i class='bx bx-edit ' ></i></a>
        <a href=""><i class='bx bx-trash ' ></i></a></td>
      <td>btnlink
        <a data-toggle="modal" data-target="#update"><i class='bx bx-edit ' ></i></a>
        <a href=""><i class='bx bx-trash ' ></i></a>
      </td>
      <td>icn
        <a data-toggle="modal" data-target="#update"><i class='bx bx-edit ' ></i></a>
        <a href=""><i class='bx bx-trash ' ></i></a>
      </td>
      <td>icnlink
        <a data-toggle="modal" data-target="#update"><i class='bx bx-edit ' ></i></a>
        <a href=""><i class='bx bx-trash ' ></i></a>
      </td>
    </tr>

  </tbody>
</table>
  @endsection