@extends('background.index')
@section('文档')
    class="open"
@stop
@section('标签')
    class="open active"
@stop
@section('page-body')
    <div class="page-body">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">修改标签</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" role="form" action="{{url('background/updateTag')}}" method="post">
                                @csrf
                                <input type="hidden" name="act" value="mod">
                                <input type="hidden" name="id" value="{{$tags->id}}">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">标签名</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="tagname" placeholder="标题" value="{{$tags->tagname}}" name="tagname" required="required" type="text">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">保存信息</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
@section('page-breadcrumbs')
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="{{url('background/index')}}">首页</a>
            </li>
            <li>
                <a href="{{url('background/tagList')}}">标签管理</a>
            </li>
            <li class="active">修改标签</li>
        </ul>
    </div>
@stop