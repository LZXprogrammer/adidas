@extends('layout.index')

@section('title')
用户列表
@endsection

@section('content')
<div class="block-area" id="tableStriped">
    <h3 class="block-title">管理员列表</h3>
    <h3 class="block-title"><a href="{{ route('admin.rbac.user.create') }}">添加管理员</a></h3>
    <div class="table-responsive overflow">

        <!-- <form class="form-inline" method="get" action="" role="form">
            显示页数：
            <select name="count" id="count" class="form-control input-sm m-b-10" style='width:100px;position:relative;top:5px;'>
                <option value="" selected >请选择</option>
                <option value="5" @if(!empty($request['count']) && $request['count'] == 5) selected @endif >5</option>
                <option value="8" @if(!empty($request['count']) && $request['count'] == 8) selected @endif >8</option>
                <option value="10" @if(!empty($request['count']) && $request['count'] == 10) selected @endif >10</option>
                <option value="15" @if(!empty($request['count']) && $request['count'] == 15) selected @endif >15</option>
            </select>
            <div class="form-group">
            <input class="form-control input-sm" type="text" name="search" value="{{$request['search'] or ''}}" placeholder="请输入用户名">
            </div>
            <input class="form-control input-sm" id="sub" type="submit" value="搜索">
        </form> -->
        <table class="tile table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>用户名</th>
                    <th>真实姓名</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $lists as $k=>$list )
                <tr>
                    <td>{{$list['id']}}</td>

                    <td>{{$list['name']}}</td>
                    <td>{{$list['username']}}</td>
                    <td>
                    	<a href="{{ route('admin.rbac.user.show') }}" class="btn" >详情</a>
                    	<a href="{{ route('admin.rbac.user.edit') }}" class="btn" >修改</a>
                    	<a href="{{ route('admin.rbac.user.destroy') }}" class="btn" onclick="return confirm('确定删除吗?')" >删除</a>
                    </td>

                </tr>
             @endforeach

            </tbody>
        </table>
        <center>

        </center>
    </div>
</div>
@endsection
