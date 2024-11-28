<tr>
    <td class="align-middle">{{$index}}</td>
    <td class="align-middle">{{$author->name}}</td>
    <td class="align-middle">{{$author->date_of_birth ? \Carbon\Carbon::parse($author->date_of_birth)->format('l, F j, Y') : 'N/A'}}</td>
    <td class="text-end">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{route("authors.edit", $author->id)}}" class="btn btn-secondary" style="border-radius: .375rem; margin-right: 8px"><i class="bi bi-pencil"></i></a>
            <form action="{{route("authors.destroy", $author->id)}}" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit" onclick="confirm(`Are you sure? You're deleting an author.`)" class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
            </form>
        </div>
    </td>
</tr>
