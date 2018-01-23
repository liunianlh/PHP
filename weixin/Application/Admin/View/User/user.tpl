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

                        用户列表 <small>用户列表管理</small>

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="index.html">用户列表</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">用户列表管理</a>


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

                                <div class="caption"><i class="icon-edit"></i>用户列表</div>

                    

                        </div>
                        <div class="portlet-body">
                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                        <thead>

                                                <tr>
                                                        <th>用户id</th>
                                                        <th>用户名称</th>
                                                        <th>用户头像</th>
                                                </tr>

                                        </thead>

                                        <tbody>
                                            {foreach from=$list key=k item=v}
                                                <tr class="">
                                                        <td>{$v["id"]}</td>
                                                        <td>{$v["name"]}</td>
                                                        <td><img src="{$v["url"]}" style="width: 69px;"></td>
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
{block name=js}
    <script>

    </script>
{/block}
