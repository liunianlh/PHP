{extends file="../index.tpl"}
{block name=title}
    用户管理
{/block}
{block name=content}
<!-- BEGIN PAGE CONTAINER-->        

<div class="container-fluid">

<!-- BEGIN PAGE HEADER-->

<div class="row-fluid">

        <div class="span12">

                <!-- BEGIN STYLE CUSTOMIZER -->

                <!-- END BEGIN STYLE CUSTOMIZER -->  

                <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                <h3 class="page-title">

                        订单详情 <small>订单详情管理</small>

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="index.html">订单详情</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">订单详情管理</a>


                        </li>

                       

                </ul>

                <!-- END PAGE TITLE & BREADCRUMB-->

        </div>

</div>

<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->

<div class="row-fluid">

        <div class="span12">

                <!-- BEGIN EXAMPLE TABLE PORTLET-->

                <div class="portlet box blue">

                        <div class="portlet-title">

                                <div class="caption"><i class="icon-edit"></i>订单详情列表</div>

                    

                        </div>
                        <div class="portlet-body">
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                        <thead>

                                                <tr>
                                                        <th>订单详情id</th>
                                                        <th>用户名</th>
                                                        <th>电影名称</th>
                                                        <th>订单信息</th>
                                                </tr>

                                        </thead>

                                        <tbody>
                                            {foreach from=$list key=k item=v}
                                                <tr class="">
                                                        <td>{$v["id"]}</td>
                                                        <td>{$v["u_id"]}</td>
                                                        <td>{$v["m_id"]}</td>
                                                        {if $v["schedule"] eq 1}
                                                        <td>订票成功</td>
                                                        {else if $v["schedule"] eq 2}
                                                        <td>付款成功</td>
                                                        {else if $v["schedule"] eq 3}
                                                        <td>退票中</td>
                                                        {else}
                                                        <td>退票成功</td>  
                                                        {/if}
                                                </tr>
                                            {/foreach}
                                        </tbody>

                                </table>

                        </div>

                </div>

                <!-- END EXAMPLE TABLE PORTLET-->

        </div>

</div>

<!-- END PAGE CONTENT -->
{/block}
{block name=alert}

{/block}
{block name=js}
    <script>
   
    </script>
{/block}

