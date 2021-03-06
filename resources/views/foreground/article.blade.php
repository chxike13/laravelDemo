<div class="scrap">
        <h1>{{$articles->title}}</h1>
        <div class="spread">
            <span class="writor">发布时间：{{$articles->create_time}}</span>
            <span class="writor">编辑：{{$articles->author}}</span>
            <span class="writor">标签：
                @foreach($keywords as $keyword)
                <a href='javascript:void(0)' onclick="getList('tag','{{$keyword}}')">{{$keyword}}</a>
                @endforeach
            </span>
            <span class="writor">热度：{{$articles->click}}</span>
        </div>
    </div>

    <!--百度分享-->

    <div class="takeaway">
        <span class="btn arr-left"></span>
        <p class="jjxq">{{$articles->desc}}
        </p>
        <span class="btn arr-right"></span>
    </div>

    <div class="substance">
        {!! $articles->content !!}
    </div>


    <div class="biaoqian">
        @foreach($keywords as $keyword)
            <a href='javascript:void(0)' onclick="getList('tag','{{$keyword}}')">{{$keyword}}</a>
        @endforeach
    </div>



    {{--<!--相关阅读 -->--}}
    {{--<div class="xgread">--}}
        {{--<div class="til"><h4>相关阅读</h4></div>--}}
        {{--<div class="lef"><!--相关阅读主题链接-->--}}
            {{--<script src='/jiehun/goto/my-65540.js' language='javascript'></script>--}}
        {{--</div>--}}
        {{--<div class="rig">--}}
            {{--<ul>--}}
                {{--<li><a href='static/foreground/images/20160907155021.html' target="_blank">蓝牙耳机怎么和手机连接 连接手机及电脑的方法</a>--}}
                {{--</li>--}}
                {{--<li><a href='static/foreground/images/20141026134140.html' target="_blank">湖南邵阳夏美玲资料照片 5岁留守女童当环卫工</a>--}}
                {{--</li>--}}
                {{--<li><a href='static/foreground/images/20140924132601.html' target="_blank">张彦文女友林佩真资料照片 砍杀女友事件原因真相</a>--}}
                {{--</li>--}}
                {{--<li><a href='static/foreground/images/20140917132145.html' target="_blank">天使女孩胡依萱个人资料 曝胡依萱案件始末</a></li>--}}
                {{--<li><a href='static/foreground/images/20140916132072.html' target="_blank">周友平个人资料照片 连环性虐6男子致死案始末</a>--}}
                {{--</li>--}}
                {{--<li><a href='static/foreground/images/20140904131317.html' target="_blank">泰国小胖墩变性前男儿身照片 变身辣妹今夕对比</a>--}}
                {{--</li>--}}
                {{--<li><a href='static/foreground/images/20140828130836.html' target="_blank">女孩凡莎莎遇害死亡照片 蹊跷身亡凡料微博求助</a>--}}
                {{--</li>--}}

            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!--频道推荐-->
    {{--<div class="hotsnew">--}}
        {{--<div class="til"><h4>频道推荐</h4></div>--}}
        {{--<ul>--}}
            {{--<li>--}}
                {{--<div class="tu"><a href='static/foreground/images/20160920156214.html' target="_blank"><img--}}
                                {{--src="{{asset('static/foreground/images/55-1609201139142c.jpg')}}"--}}
                                {{--alt="广州公司聚餐好去处 聚餐"/></a></div>--}}
                {{--<p><a href='static/foreground/images/20160920156214.html'>广州公司聚餐好去处 聚餐</a></p></li>--}}
            {{--<li>--}}
                {{--<div class="tu"><a href='static/foreground/images/20160920156275.html' target="_blank"><img--}}
                                {{--src="{{asset('static/foreground/images/57-1609201131370-L.jpg')}}" alt="老年人过生日送什么礼物好"/></a>--}}
                {{--</div>--}}
                {{--<p><a href='static/foreground/images/20160920156275.html'>老年人过生日送什么礼物好</a></p></li>--}}
            {{--<li>--}}
                {{--<div class="tu"><a href='static/foreground/images/20160920156274.html' target="_blank"><img--}}
                                {{--src="{{asset('static/foreground/images/52-160920112I80-L.jpg')}}"--}}
                                {{--alt="孕妇可以学开车吗 孕妇开"/></a></div>--}}
                {{--<p><a href='static/foreground/images/20160920156274.html'>孕妇可以学开车吗 孕妇开</a></p></li>--}}
            {{--<li>--}}
                {{--<div class="tu"><a href='static/foreground/images/20160920156256.html' target="_blank"><img--}}
                                {{--src="{{asset('static/foreground/images/54-1609201132532E.jpg')}}"--}}
                                {{--alt="为什么吃火锅会拉肚子 如"/></a></div>--}}
                {{--<p><a href='static/foreground/images/20160920156256.html'>为什么吃火锅会拉肚子 如</a></p></li>--}}
            {{--<li>--}}
                {{--<div class="tu"><a href='static/foreground/images/20160920156213.html' target="_blank"><img--}}
                                {{--src="{{asset('static/foreground/images/55-16092011312M37.jpg')}}"--}}
                                {{--alt="厦门公司聚餐好去处 最具"/></a></div>--}}
                {{--<p><a href='static/foreground/images/20160920156213.html'>厦门公司聚餐好去处 最具</a></p></li>--}}
            {{--<li>--}}
                {{--<div class="tu"><a href='static/foreground/images/20160920156273.html' target="_blank"><img--}}
                                {{--src="{{asset('static/foreground/images/52-160920111U60-L.jpg')}}"--}}
                                {{--alt="哪些香水是斩男香 七大传"/></a></div>--}}
                {{--<p><a href='static/foreground/images/20160920156273.html'>哪些香水是斩男香 七大传</a></p></li>--}}
            {{--<li>--}}
                {{--<div class="tu"><a href='static/foreground/images/20160920156272.html' target="_blank"><img--}}
                                {{--src="{{asset('static/foreground/images/57-160920111J90-L.jpg')}}"--}}
                                {{--alt="炒菜要加水吗 教你如何炒"/></a></div>--}}
                {{--<p><a href='static/foreground/images/20160920156272.html'>炒菜要加水吗 教你如何炒</a></p></li>--}}
            {{--<li>--}}
                {{--<div class="tu"><a href='static/foreground/images/20160920156211.html' target="_blank"><img--}}
                                {{--src="{{asset('static/foreground/images/55-160920111952403.jpg')}}" alt="北京公司聚餐好去处 值得"/></a>--}}
                {{--</div>--}}
                {{--<p><a href='static/foreground/images/20160920156211.html'>北京公司聚餐好去处 值得</a></p></li>--}}

        {{--</ul>--}}
    {{--</div>--}}

