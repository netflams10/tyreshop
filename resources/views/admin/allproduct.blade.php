All my Product<br><br><br><br>

@foreach($products as $product)
    {{ $product->id }} | {{ $product->companynames->companyname }} | {{ $product->tyresizes->tyresize }} | {{ $product->aspectratios->aspectratio }} | {{ $product->rimsizes->rimsize }} | {{ $product->price }} | <img src="/storage/{{ $product->image }}"> | 
    <a href="{{ route('admin.edit', $product->id) }}"> Edit </a> |||

        <form action="{{  route('admin.delete', $product->id) }}" method="post" id="delete-form-{{$product->id}}" style="display:none">
            @method('DELETE')
            @csrf
        </form>
        <button onclick="if(confirm('Are you sure to delete?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $product->id }}').submit();
                        } else {
                            event.preventDefault();
                        }"
        > Delete </button> | 
    <br /><br />
@endforeach