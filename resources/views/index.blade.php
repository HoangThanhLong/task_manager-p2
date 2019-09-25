<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<a href="create">Create</a>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Hoang Thanh Long</td>
        <td>0386519989</td>
        <td>hoanglong0793@gmail.com</td>
        <td>
            <a href="{{route('show', ['id'=> 1])}}">Xem</a> | <a href="{{route('edit', ['id' => 1])}}">Sửa</a> | <a href="{{route('delete', ['id' => 1])}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Phung Thi Le Trang</td>
        <td>01234567890</td>
        <td>trangphung206@gmail.com</td>
        <td>
            <a href="{{route('show', ['id'=> 2])}}">Xem</a> | <a href="{{route('edit', ['id' => 2])}}">Sửa</a> | <a href="{{route('delete', ['id' => 2])}}">Xóa</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Hoang Dieu Linh</td>
        <td>01234567890</td>
        <td>Dieulinh@gmail.com</td>
        <td>
            <a href="{{route('show', ['id'=> 3])}}">Xem</a> | <a href="{{route('edit', ['id' => 3])}}">Sửa</a> | <a href="{{route('delete', ['id' => 3])}}">Xóa</a>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
