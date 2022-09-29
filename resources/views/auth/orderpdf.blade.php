<table>
    <thead>
        <tr>
            <th>ชื่อ</th>
            <th>ราคาต่อหน่วย</th>
            <th>จำนวน</th>
            <th>ราคา</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{$item->model->name}}</td>
                <td>{{$item->model->dealer_price}}</td>
                <td>{{$item->model->quantity}}</td>
                <td>{{number_format($item->model->dealer_price * $item->quantity,2)}}</td>
            </tr>
        @endforeach
    </tbody>
</table>