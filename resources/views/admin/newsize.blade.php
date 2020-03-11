

<h3>New Company Name</h3>

<form action="{{ route('admin.newcompanyname') }}" method="post">
@csrf
    <input type="text" name="companyname" >
    <button type="submit">SUBMIT</button>
</form>


<h3>New Tyre Size</h3>
<form action="{{ route('admin.newtyresize') }}" method="post">
@csrf
    <input type="text" name="tyresize" >
    <button type="submit">SUBMIT</button>
</form>

<h3>New Aspect Ratio</h3>
<form action="{{ route('admin.newaspectratio') }}" method="post">
@csrf
    <input type="text" name="aspectratio" >
    <button type="submit">SUBMIT</button>
</form>

<h3>New Rim Size</h3>
<form action="{{ route('admin.newrimsize') }}" method="post">
@csrf
    <input type="text" name="rimsize" >
    <button type="submit">SUBMIT</button>
</form>