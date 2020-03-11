<form action="{{ route('submit.product') }}" method="post" enctype="multipart/form-data">
@csrf
    <select name="companyname" class="" id="">
    @foreach($companynames as $companyname)
        <option value="{{ $companyname->id }}">
            {{ $companyname->companyname }}
        </option>
    @endforeach
    </select>

    <select name="tyresize" class="" id="">
        @foreach($tyresizes as $tyresize)
            <option value="{{ $tyresize->id }}">
                {{ $tyresize->tyresize }}
            </option>
        @endforeach
    </select>
    <select name="aspectratio" class="" id="">
        @foreach($aspectratios as $aspectratio)
            <option value="{{ $aspectratio->id }}">
                {{ $aspectratio->aspectratio }}
            </option>
        @endforeach
    </select>
    <select name="rimsize" class="" id="">
        @foreach($rimsizes as $rimsize)
            <option value="{{ $rimsize->id }}">
                {{ $rimsize->rimsize }}
            </option>
        @endforeach
    </select>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <input type="text" name="price" class="" id="">
    <input type="file" name="image" class="" id="image">

    <button name="submit">Submit Product</button>
</form>