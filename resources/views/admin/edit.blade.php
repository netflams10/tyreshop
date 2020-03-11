Edit this Task <a href="{{ route('admin.edit', $product->id) }}"> Edit </a>


<form action="{{ route('admin.edited.product', $product->id) }}" method="post" enctype="multipart/form-data">
    @csrf
        <select name="companyname">
            <option value="{{ $product->companyname }}" selected>{{ $product->companynames->companyname }} </option>
            @foreach($companynames as $companyname)
                <option value="{{ $companyname->id }}">{{ $companyname->companyname }}</option>
            @endforeach
        </select>

        <select name="tyresize">
            <option value="{{ $product->tyresize }}"> {{ $product->tyresizes->tyresize}} </option>
            @foreach($tyresizes as $tyresize)
                <option value="{{ $tyresize->id }}"> {{ $tyresize->tyresize}} </option>
            @endforeach
        </select>

        <select name="aspectratio">
            <option value="{{ $product->aspectratio }}"> {{ $product->aspectratios->aspectratio }} </option>
            @foreach($aspectratios as $aspectratio)
                <option value="{{ $aspectratio->id }}"> {{ $aspectratio->aspectratio}} </option>
            @endforeach
        </select>

        <select name="rimsize">
            <option value="{{ $product->rimsize }}"> {{ $product->rimsizes->rimsize }} </option>
            @foreach($rimsizes as $rimsize)
                <option value="{{ $rimsize->id }}"> {{ $rimsize->rimsize }} </option>
            @endforeach
        </select>

        <textarea type="text" name="description" >{{ $product->description }}</textarea>

        <input type="text" name="price" value="{{ $product->price }}">

        <button type="submit"Submit>Submit</button>
</form>

