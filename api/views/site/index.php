<?php
$this->title = '篱笆视频播放器影片资源Api使用说明';
?>
﻿
﻿
﻿<p></p><div class="toc"><h3>文章目录</h3><ul><li><a href="#_2">前言</a></li><li><a href="#_13">一，影片相关接口</a></li><ul><li><a href="#1_15">1，影片相关字段说明：</a></li><li><a href="#2_53">2，影片列表页接口</a></li><li><a href="#3_190">3,影片详情页接口</a></li></ul><li><a href="#accesstoken_259">二、access-token获取，用户注册、登录</a></li><ul><li><a href="#1_260">1.用户注册</a></li><li><a href="#2_278">2.用户登录</a></li></ul><li><a href="#_297">说明</a></li></ul></div><p></p>
<h1><a id="_2"></a>前言</h1>
<p><font color="#999AAA">该Api提供影片列表、影片详情以及用户注册、登录等功能。</font></p>
<hr color="#000000" size="1&quot;">
<p><font color="#999AAA">1，提示：目前Api是公开的，后续可能会启用access_token验证。建议调用时按照以下说明，提供用户注册、登录功能。并在每次请求时附上 access-token。<br>
2，该影片Api支持内容格式协商输出xml或者json，请求时自行设置Accept内容为application/xml或者application/json。<br>
</font></p>
<p>
    <img src="https://img-blog.csdnimg.cn/20200929151117551.png"/>
</p>
<hr color="#000000" size="1&quot;">
<h1><a id="_13"></a>一，影片相关接口</h1>
<h2><a id="1_15"></a>1，影片相关字段说明：</h2>
<pre><code class="prism language-sql">  <span class="token punctuation">`</span>id<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token operator">NOT</span> <span class="token boolean">NULL</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_title<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token operator">NOT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'视频名称'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_sub_title<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'视频别名'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_blurb<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'简介'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_content<span class="token punctuation">`</span> <span class="token keyword">longtext</span> <span class="token keyword">COMMENT</span> <span class="token string">'详细介绍'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_status<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'状态'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_type<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'视频分类'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_class<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'扩展分类'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_tag<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_pic_url<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'图片url'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_pic_path<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'图片下载保存路径'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_pic_thumb<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_actor<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'演员'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_director<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'导演'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_writer<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'编剧'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_remarks<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'影片版本'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_pubdate<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_area<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'地区'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_lang<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'语言'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_year<span class="token punctuation">`</span> <span class="token keyword">varchar</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'年代'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_hits<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'总浏览数'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_hits_day<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'一天浏览数'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_hits_week<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'一周浏览数'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_hits_month<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'一月浏览数'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_up<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'顶数'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_down<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'踩数'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_score<span class="token punctuation">`</span> <span class="token keyword">decimal</span><span class="token punctuation">(</span><span class="token number">3</span><span class="token punctuation">,</span><span class="token number">1</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0.0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'评分'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_score_all<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'总评分'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_score_num<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token string">'0'</span> <span class="token keyword">COMMENT</span> <span class="token string">'总评人数'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_create_time<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'创建时间'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_update_time<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'更新时间'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_lately_hit_time<span class="token punctuation">`</span> <span class="token keyword">int</span><span class="token punctuation">(</span><span class="token number">11</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'最后浏览时间'</span><span class="token punctuation">,</span>
  <span class="token punctuation">`</span>vod_lately_ip<span class="token punctuation">`</span> <span class="token keyword">bigint</span><span class="token punctuation">(</span><span class="token number">255</span><span class="token punctuation">)</span> <span class="token keyword">DEFAULT</span> <span class="token boolean">NULL</span> <span class="token keyword">COMMENT</span> <span class="token string">'最后一次浏览的客户端ip'</span>
</code></pre>
<h2><a id="2_53"></a>2，影片列表页接口</h2>
<p>URI 地址：https://api.shipinbofang.com/vod-details<br>
请求方式：GET或者POST<br>
传入参数：</p>

<table>
<thead>
<tr>
<th>字段</th>
<th>值示例</th>
<th>说明</th>
</tr>
</thead>
<tbody>
<tr>
<td>page</td>
<td>2</td>
<td>分页页码</td>
</tr>
<tr>
<td>sort</td>
<td>vod_title</td>
<td>排序(示例是按照影片标题排序)</td>
</tr>
<tr>
<td>VodDetailSearch[*]</td>
<td>VodDetailSearch[vod_title]=海贼王</td>
<td>按给定条件过滤符合条件的影片</td>
</tr>
</tbody>
</table><p><font color="#999AAA">提示：理论上可以根据影片所有字段排序和过滤，支持任何字段组合，请根据需要自行选择。</font></p>
<p>相应内容示例：</p>
<pre><code class="prism language-json"><span class="token punctuation">[</span><span class="token punctuation">{</span>
		<span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">62458</span><span class="token punctuation">,</span>
		<span class="token string">"url"</span><span class="token punctuation">:</span> <span class="token string">"https://okzy.co/?m=vod-detail-id-64807.html"</span><span class="token punctuation">,</span>
		<span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"bcdc425930f90b4e190e68437c65f3e1"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_title"</span><span class="token punctuation">:</span> <span class="token string">"说电影《奇幻人生》"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_sub_title"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_blurb"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_content"</span><span class="token punctuation">:</span> <span class="token string">"说电影《奇幻人生》"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_status"</span><span class="token punctuation">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
		<span class="token string">"vod_type"</span><span class="token punctuation">:</span> <span class="token string">"电影解说"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_class"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_tag"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_pic_url"</span><span class="token punctuation">:</span> <span class="token string">"https://rpg.pic-imges.com/pic/upload/vod/2020-09/202009271601169974.jpeg"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_pic_path"</span><span class="token punctuation">:</span> <span class="token string">"/upload/images/shuodianyingqihuanrensheng/202009271601169974.jpeg"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_pic_thumb"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_actor"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_director"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_writer"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_remarks"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_pubdate"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_area"</span><span class="token punctuation">:</span> <span class="token string">"美国"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_lang"</span><span class="token punctuation">:</span> <span class="token string">"英语"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_year"</span><span class="token punctuation">:</span> <span class="token string">"2006"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_hits"</span><span class="token punctuation">:</span> <span class="token number">7</span><span class="token punctuation">,</span>
		<span class="token string">"vod_hits_day"</span><span class="token punctuation">:</span> <span class="token number">6</span><span class="token punctuation">,</span>
		<span class="token string">"vod_hits_week"</span><span class="token punctuation">:</span> <span class="token number">6</span><span class="token punctuation">,</span>
		<span class="token string">"vod_hits_month"</span><span class="token punctuation">:</span> <span class="token number">6</span><span class="token punctuation">,</span>
		<span class="token string">"vod_up"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
		<span class="token string">"vod_down"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
		<span class="token string">"vod_score"</span><span class="token punctuation">:</span> <span class="token string">"0.0"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_score_all"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
		<span class="token string">"vod_score_num"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
		<span class="token string">"vod_create_time"</span><span class="token punctuation">:</span> <span class="token number">1601170026</span><span class="token punctuation">,</span>
		<span class="token string">"vod_update_time"</span><span class="token punctuation">:</span> <span class="token number">1601170026</span><span class="token punctuation">,</span>
		<span class="token string">"vod_lately_hit_time"</span><span class="token punctuation">:</span> <span class="token number">1601199515</span><span class="token punctuation">,</span>
		<span class="token string">"vod_lately_ip"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"playurls"</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
				<span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">796949</span><span class="token punctuation">,</span>
				<span class="token string">"play_title"</span><span class="token punctuation">:</span> <span class="token string">"全集"</span><span class="token punctuation">,</span>
				<span class="token string">"play_from"</span><span class="token punctuation">:</span> <span class="token string">"ckm3u8"</span><span class="token punctuation">,</span>
				<span class="token string">"play_url"</span><span class="token punctuation">:</span> <span class="token string">"https://good.jieshuo-okzy.com/20200926/7445_aa5fdae6/index.m3u8"</span><span class="token punctuation">,</span>
				<span class="token string">"play_url_aes"</span><span class="token punctuation">:</span> <span class="token string">"7eaa3f0cfa4d3e8c8e0160ee44a16f4f"</span><span class="token punctuation">,</span>
				<span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"bcdc425930f90b4e190e68437c65f3e1"</span><span class="token punctuation">,</span>
				<span class="token string">"create_time"</span><span class="token punctuation">:</span> <span class="token number">1601170026</span><span class="token punctuation">,</span>
				<span class="token string">"update_time"</span><span class="token punctuation">:</span> <span class="token number">1601170026</span>
			<span class="token punctuation">}</span><span class="token punctuation">,</span>
			<span class="token punctuation">{</span>
				<span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">796951</span><span class="token punctuation">,</span>
				<span class="token string">"play_title"</span><span class="token punctuation">:</span> <span class="token string">"全集"</span><span class="token punctuation">,</span>
				<span class="token string">"play_from"</span><span class="token punctuation">:</span> <span class="token string">"迅雷下载"</span><span class="token punctuation">,</span>
				<span class="token string">"play_url"</span><span class="token punctuation">:</span> <span class="token string">"http://okxxxzy.xzokzyzy.com/20200926/7445_aa5fdae6/奇幻人生2006美国.mp4"</span><span class="token punctuation">,</span>
				<span class="token string">"play_url_aes"</span><span class="token punctuation">:</span> <span class="token string">"a6668533997279db41030090e8c0c7d0"</span><span class="token punctuation">,</span>
				<span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"bcdc425930f90b4e190e68437c65f3e1"</span><span class="token punctuation">,</span>
				<span class="token string">"create_time"</span><span class="token punctuation">:</span> <span class="token number">1601170026</span><span class="token punctuation">,</span>
				<span class="token string">"update_time"</span><span class="token punctuation">:</span> <span class="token number">1601170026</span>
			<span class="token punctuation">}</span>
		<span class="token punctuation">]</span>
	<span class="token punctuation">}</span><span class="token punctuation">,</span>
	<span class="token operator">...</span><span class="token punctuation">.</span><span class="token punctuation">.</span>
	<span class="token punctuation">{</span>
		<span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">62456</span><span class="token punctuation">,</span>
		<span class="token string">"url"</span><span class="token punctuation">:</span> <span class="token string">"https://okzy.co/?m=vod-detail-id-64806.html"</span><span class="token punctuation">,</span>
		<span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"919a103b9f0f486c992b4bf597788c4a"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_title"</span><span class="token punctuation">:</span> <span class="token string">"说电影《刺客战场》"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_sub_title"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_blurb"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_content"</span><span class="token punctuation">:</span> <span class="token string">"说电影《刺客战场》"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_status"</span><span class="token punctuation">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
		<span class="token string">"vod_type"</span><span class="token punctuation">:</span> <span class="token string">"电影解说"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_class"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_tag"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_pic_url"</span><span class="token punctuation">:</span> <span class="token string">"https://rpg.pic-imges.com/pic/upload/vod/2020-09/202009271601169881.jpeg"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_pic_path"</span><span class="token punctuation">:</span> <span class="token string">"/upload/images/shuodianyingcikezhanchang/202009271601169881.jpeg"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_pic_thumb"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_actor"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_director"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_writer"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_remarks"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
		<span class="token string">"vod_pubdate"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"vod_area"</span><span class="token punctuation">:</span> <span class="token string">"美国"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_lang"</span><span class="token punctuation">:</span> <span class="token string">"英语"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_year"</span><span class="token punctuation">:</span> <span class="token string">"1995"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_hits"</span><span class="token punctuation">:</span> <span class="token number">6</span><span class="token punctuation">,</span>
		<span class="token string">"vod_hits_day"</span><span class="token punctuation">:</span> <span class="token number">5</span><span class="token punctuation">,</span>
		<span class="token string">"vod_hits_week"</span><span class="token punctuation">:</span> <span class="token number">5</span><span class="token punctuation">,</span>
		<span class="token string">"vod_hits_month"</span><span class="token punctuation">:</span> <span class="token number">5</span><span class="token punctuation">,</span>
		<span class="token string">"vod_up"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
		<span class="token string">"vod_down"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
		<span class="token string">"vod_score"</span><span class="token punctuation">:</span> <span class="token string">"0.0"</span><span class="token punctuation">,</span>
		<span class="token string">"vod_score_all"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
		<span class="token string">"vod_score_num"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
		<span class="token string">"vod_create_time"</span><span class="token punctuation">:</span> <span class="token number">1601169935</span><span class="token punctuation">,</span>
		<span class="token string">"vod_update_time"</span><span class="token punctuation">:</span> <span class="token number">1601169935</span><span class="token punctuation">,</span>
		<span class="token string">"vod_lately_hit_time"</span><span class="token punctuation">:</span> <span class="token number">1601199515</span><span class="token punctuation">,</span>
		<span class="token string">"vod_lately_ip"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
		<span class="token string">"playurls"</span><span class="token punctuation">:</span> <span class="token punctuation">[</span><span class="token punctuation">{</span>
				<span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">796943</span><span class="token punctuation">,</span>
				<span class="token string">"play_title"</span><span class="token punctuation">:</span> <span class="token string">"全集"</span><span class="token punctuation">,</span>
				<span class="token string">"play_from"</span><span class="token punctuation">:</span> <span class="token string">"ckm3u8"</span><span class="token punctuation">,</span>
				<span class="token string">"play_url"</span><span class="token punctuation">:</span> <span class="token string">"https://good.jieshuo-okzy.com/20200926/7446_4e0d7134/index.m3u8"</span><span class="token punctuation">,</span>
				<span class="token string">"play_url_aes"</span><span class="token punctuation">:</span> <span class="token string">"51de7a1f3595f24d2899c86174fe2513"</span><span class="token punctuation">,</span>
				<span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"919a103b9f0f486c992b4bf597788c4a"</span><span class="token punctuation">,</span>
				<span class="token string">"create_time"</span><span class="token punctuation">:</span> <span class="token number">1601169935</span><span class="token punctuation">,</span>
				<span class="token string">"update_time"</span><span class="token punctuation">:</span> <span class="token number">1601169935</span>
			<span class="token punctuation">}</span><span class="token punctuation">,</span>
			<span class="token punctuation">{</span>
				<span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">796946</span><span class="token punctuation">,</span>
				<span class="token string">"play_title"</span><span class="token punctuation">:</span> <span class="token string">"全集"</span><span class="token punctuation">,</span>
				<span class="token string">"play_from"</span><span class="token punctuation">:</span> <span class="token string">"迅雷下载"</span><span class="token punctuation">,</span>
				<span class="token string">"play_url"</span><span class="token punctuation">:</span> <span class="token string">"http://okxxxzy.xzokzyzy.com/20200926/7446_4e0d7134/刺客战场1995美国.mp4"</span><span class="token punctuation">,</span>
				<span class="token string">"play_url_aes"</span><span class="token punctuation">:</span> <span class="token string">"3edfad776fbe1b205fa7064d2ed7bc8c"</span><span class="token punctuation">,</span>
				<span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"919a103b9f0f486c992b4bf597788c4a"</span><span class="token punctuation">,</span>
				<span class="token string">"create_time"</span><span class="token punctuation">:</span> <span class="token number">1601169935</span><span class="token punctuation">,</span>
				<span class="token string">"update_time"</span><span class="token punctuation">:</span> <span class="token number">1601169935</span>
			<span class="token punctuation">}</span>
		<span class="token punctuation">]</span>
	<span class="token punctuation">}</span>

<span class="token punctuation">]</span>
</code></pre>
<p><font color="#999AAA">提示：响应的结果是一条长度为20的集合（List），相关字段的含义请对照上述影片相关字段说明。</font></p>
<h2><a id="3_190"></a>3,影片详情页接口</h2>
<p>URI 地址：https://api.shipinbofang.com/vod-details/*<br>
请求方式：GET或者POST<br>
传入参数：影片ID<br>
相应内容示例：http://api.shipinbofang.com/vod-details/10000</p>
<pre><code class="prism language-json"><span class="token punctuation">{</span>
    <span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">10000</span><span class="token punctuation">,</span>
    <span class="token string">"url"</span><span class="token punctuation">:</span> <span class="token string">"https://okzy.co/?m=vod-detail-id-54681.html"</span><span class="token punctuation">,</span>
    <span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"ec49d54502e6a9d0aa4388b1409ba785"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_title"</span><span class="token punctuation">:</span> <span class="token string">"奇诺之旅：疾病之国 -For You-"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_sub_title"</span><span class="token punctuation">:</span> <span class="token string">"Gekijô ban kino no tabi: Byôki no kuni - For you"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_blurb"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
    <span class="token string">"vod_content"</span><span class="token punctuation">:</span> <span class="token string">"旅行中的奇诺和艾鲁梅斯来到了一个科学高度发达的文明国家。在安定的环境下，该国家人民均生活在巨蛋之内。一方面，这个国家是由杰出人士们创造出来的“开拓地”，然而另一方面，他们又同时渴望着巨蛋之外真实的阳光和土地。"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_status"</span><span class="token punctuation">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token string">"vod_type"</span><span class="token punctuation">:</span> <span class="token string">"日韩动漫"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_class"</span><span class="token punctuation">:</span> <span class="token string">""</span><span class="token punctuation">,</span>
    <span class="token string">"vod_tag"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
    <span class="token string">"vod_pic_url"</span><span class="token punctuation">:</span> <span class="token string">"https://rpg.pic-imges.com/pic/upload/vod/2020-04/1587400286.jpg"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_pic_path"</span><span class="token punctuation">:</span> <span class="token string">"/upload/images/qinuozhilvjibingzhiguoForYou/1587400286.jpg"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_pic_thumb"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
    <span class="token string">"vod_actor"</span><span class="token punctuation">:</span> <span class="token string">"前田爱,相ヶ瀬龙史,川澄绫子"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_director"</span><span class="token punctuation">:</span> <span class="token string">"中村隆太郎"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_writer"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
    <span class="token string">"vod_remarks"</span><span class="token punctuation">:</span> <span class="token string">"HD"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_pubdate"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
    <span class="token string">"vod_area"</span><span class="token punctuation">:</span> <span class="token string">"日本"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_lang"</span><span class="token punctuation">:</span> <span class="token string">"日语"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_year"</span><span class="token punctuation">:</span> <span class="token string">"2007"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_hits"</span><span class="token punctuation">:</span> <span class="token number">2</span><span class="token punctuation">,</span>
    <span class="token string">"vod_hits_day"</span><span class="token punctuation">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token string">"vod_hits_week"</span><span class="token punctuation">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token string">"vod_hits_month"</span><span class="token punctuation">:</span> <span class="token number">1</span><span class="token punctuation">,</span>
    <span class="token string">"vod_up"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
    <span class="token string">"vod_down"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
    <span class="token string">"vod_score"</span><span class="token punctuation">:</span> <span class="token string">"7.9"</span><span class="token punctuation">,</span>
    <span class="token string">"vod_score_all"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
    <span class="token string">"vod_score_num"</span><span class="token punctuation">:</span> <span class="token number">0</span><span class="token punctuation">,</span>
    <span class="token string">"vod_create_time"</span><span class="token punctuation">:</span> <span class="token number">1587400286</span><span class="token punctuation">,</span>
    <span class="token string">"vod_update_time"</span><span class="token punctuation">:</span> <span class="token number">1587400286</span><span class="token punctuation">,</span>
    <span class="token string">"vod_lately_hit_time"</span><span class="token punctuation">:</span> <span class="token number">1601201193</span><span class="token punctuation">,</span>
    <span class="token string">"vod_lately_ip"</span><span class="token punctuation">:</span> <span class="token keyword">null</span><span class="token punctuation">,</span>
    <span class="token string">"playurls"</span><span class="token punctuation">:</span> <span class="token punctuation">[</span>
        <span class="token punctuation">{</span>
            <span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">193642</span><span class="token punctuation">,</span>
            <span class="token string">"play_title"</span><span class="token punctuation">:</span> <span class="token string">"HD高清"</span><span class="token punctuation">,</span>
            <span class="token string">"play_from"</span><span class="token punctuation">:</span> <span class="token string">"ckm3u8"</span><span class="token punctuation">,</span>
            <span class="token string">"play_url"</span><span class="token punctuation">:</span> <span class="token string">"https://iqiyi.cdn25-okzy.com/20200420/3846_f7d0c048/index.m3u8"</span><span class="token punctuation">,</span>
            <span class="token string">"play_url_aes"</span><span class="token punctuation">:</span> <span class="token string">"7445fa44ea199e0c6c5a9be0d5fdddf6"</span><span class="token punctuation">,</span>
            <span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"ec49d54502e6a9d0aa4388b1409ba785"</span><span class="token punctuation">,</span>
            <span class="token string">"create_time"</span><span class="token punctuation">:</span> <span class="token number">1587400286</span><span class="token punctuation">,</span>
            <span class="token string">"update_time"</span><span class="token punctuation">:</span> <span class="token number">1587400286</span>
        <span class="token punctuation">}</span><span class="token punctuation">,</span>
        <span class="token punctuation">{</span>
            <span class="token string">"id"</span><span class="token punctuation">:</span> <span class="token number">193690</span><span class="token punctuation">,</span>
            <span class="token string">"play_title"</span><span class="token punctuation">:</span> <span class="token string">"HD高清"</span><span class="token punctuation">,</span>
            <span class="token string">"play_from"</span><span class="token punctuation">:</span> <span class="token string">"迅雷下载"</span><span class="token punctuation">,</span>
            <span class="token string">"play_url"</span><span class="token punctuation">:</span> <span class="token string">"http://down.okdown7.com/20200420/3846_f7d0c048/第1话奇诺之旅疾病之国日语_高清.mp4"</span><span class="token punctuation">,</span>
            <span class="token string">"play_url_aes"</span><span class="token punctuation">:</span> <span class="token string">"e54b606dbcff8226a4f68f9af68d2007"</span><span class="token punctuation">,</span>
            <span class="token string">"url_id"</span><span class="token punctuation">:</span> <span class="token string">"ec49d54502e6a9d0aa4388b1409ba785"</span><span class="token punctuation">,</span>
            <span class="token string">"create_time"</span><span class="token punctuation">:</span> <span class="token number">1587400286</span><span class="token punctuation">,</span>
            <span class="token string">"update_time"</span><span class="token punctuation">:</span> <span class="token number">1587400286</span>
        <span class="token punctuation">}</span>
    <span class="token punctuation">]</span>
<span class="token punctuation">}</span>
</code></pre>
<hr color="#000000" size="1&quot;">
<h1><a id="accesstoken_259"></a>二、access-token获取，用户注册、登录</h1>
<h2><a id="1_260"></a>1.用户注册</h2>
<p>URI 地址：https://api.shipinbofang.com/user/signup<br>
请求方式：POST<br>
传入参数：</p>

<table>
<thead>
<tr>
<th>字段</th>
<th>值示例</th>
<th>说明</th>
</tr>
</thead>
<tbody>
<tr>
<td>email</td>
<td>123456@qq.com</td>
<td>邮箱地址</td>
</tr>
<tr>
<td>username</td>
<td>test</td>
<td>用户名</td>
</tr>
<tr>
<td>password</td>
<td>12345678</td>
<td>密码</td>
</tr>
<tr>
<td>password_repeat</td>
<td>12345678</td>
<td>重复密码</td>
</tr>
</tbody>
</table><p>相应内容示例：暂无<br>
<font color="#999AAA">提示：<br>
1，用户注册成功，可能需要去邮箱验证激活<br>
2，接口已经实现用户注册的各种校验，请勿滥用<br>
3，如注册遇错误，请自行处理，提示用户<br>
</font></p>
<h2><a id="2_278"></a>2.用户登录</h2>
<p>URI 地址：https://api.shipinbofang.com/user/login<br>
请求方式：POST<br>
传入参数：</p>

<table>
<thead>
<tr>
<th>字段</th>
<th>值示例</th>
<th>说明</th>
</tr>
</thead>
<tbody>
<tr>
<td>username</td>
<td>test</td>
<td>用户名</td>
</tr>
<tr>
<td>password</td>
<td>12345678</td>
<td>密码</td>
</tr>
</tbody>
</table><p>相应内容示例：</p>
<pre><code class="prism language-json"><span class="token punctuation">{</span>
    <span class="token string">"access_token"</span><span class="token punctuation">:</span> <span class="token string">"6k8Ar4jC_N0SOxrjMpBh3epkpAov7wxn"</span>
<span class="token punctuation">}</span>
</code></pre>
<p><font color="#999AAA">提示：<br>
用户登录成功，会返回access_token，请求影片信息相关接口的时候可以传入access_token<br>
</font></p>
<h1><a id="_297"></a>说明</h1>
<font color="#999AAA">
1，本Api功能完善，影片列表页Api支持各种字段筛选、排序。
2,，本站不会储存任何影片资源，所有资源来自于互联网其他用户分享，仅供学习交流之用。如侵犯您的权益，请及时与我们联系，我们会积极屏蔽相关链接。</font>

