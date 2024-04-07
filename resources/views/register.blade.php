<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<form action="/user/register" method="post">
    @csrf
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input class="btn btn-primary" type="submit" value="Register" />
            </td>
        </tr>
    </table>
</form>

<br>

@forelse ($getData as $item)
<li href="">{{ $item }}</li>
@empty
<li>No data!</li>
@endforelse

</body>

</html>