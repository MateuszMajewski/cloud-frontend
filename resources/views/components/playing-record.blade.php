<tr>
    <td>{{$category->playerID}}</td>
    <td>{{$category->schoolID}}</td>
    <td>{{$category->yearID}}</td>
    <td class="text-right"><a class="text-center" href="/playing/edit/{{$category->id}}"><i class="fa fa-angle-double-right"></i></a></td>
    <td class="text-center">
        <form method="POST" action="/playing/{{$category->id}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-link" type="submit"><i class="fa fa-trash-o"></i></button>
        </form>
    </td>
</tr>
<tr></tr>