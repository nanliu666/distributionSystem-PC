<?php
use yii\helpers\Html;
use kartik\detail\DetailView;

use yii\web\JsExpression;
use daixianceng\echarts\ECharts;
/* @var $this yii\web\View */

$this->title = '概览';
$this->params['breadcrumbs'][] = $this->title;




$columns1 = [
    'model' => $serverModel,
    'condensed'=>false,
    'hover'=>true,
    'panel'=>[
        'heading'=>'运营数据',
        'type'=>DetailView::TYPE_INFO,
    ],
    'attributes' => [


        [
            'label'           => '玩家数量',
            'attribute'       => 'player_count',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '代理数量',
            'attribute'       => 'agency_count',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '玩家库存(钻石)',
            'attribute'       => 'player_gold',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '管理员库存(钻石)',
            'attribute'       => 'agency_gold',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '平台库存(钻石)',
            'attribute'       => 'all_gold',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],



        [
            'label'           => '玩家库存(金币)',
            'attribute'       => 'player_copper',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '管理员库存(金币)',
            'attribute'       => 'agency_copper',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '平台库存(金币)',
            'attribute'       => 'all_copper',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],

//            [
//                'columns' => [
//                    [
//                        'label'           => '昨日新增用户',
//                        'attribute'       => 'addUser',
//
//                        'valueColOptions' => ['style' => 'width:25%;cursor: pointer;','onclick'=>"window.open('URL','_self')"],
//                        'labelColOptions' => ['style' => 'width:25%;text-align: center;cursor: pointer;','onclick'=>"window.open('URL','_self')"],
//                    ],
//                    [
//                        'label'           => '昨日活跃用户',
//                        'attribute'       => 'active',
//
//                        'valueColOptions' => ['style' => 'width:25%;cursor: pointer;','onclick'=>"window.open('URL','_self')"],
//                        'labelColOptions' => ['style' => 'width:25%;text-align: center;cursor: pointer;','onclick'=>"window.open('URL','_self')"],
//                    ],
//
//                ],
//            ],

    ],
    'enableEditMode'=>false,
];

$columns2 = [
    'model' => $serverModel,
    'condensed'=>false,
    'hover'=>true,
    'panel'=>[
        'heading'=>'金额信息',
        'type'=>DetailView::TYPE_INFO,
    ],
    'attributes' => [


        [
            'label'           => '所有充值金额',
            'attribute'       => 'total_money',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '今日充值金额',
            'attribute'       => 'day_money',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '代理已提奖励（元）',
            'attribute'       => 'total_exchange',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '截止昨日 全平台税产值(绑定代理)',
            'attribute'       => 'bind_agency_production',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '截止昨日 全平台税前产值(非绑定代理)',
            'attribute'       => 'unbind_agency_production',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '截止昨日 全平台所有税前总产值',
            'attribute'       => 'all_production',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '截止昨日 全平台所有代理基本分成',
            'attribute'       => 'total_agency_rebate',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],
        [
            'label'           => '截止昨日 全平台净产值',
            'attribute'       => 'total_agency_out_put',
            'valueColOptions' => ['style' => 'width:50%;cursor: pointer;'],
            'labelColOptions' => ['style' => 'width:50%;text-align: center;cursor: pointer;'],
        ],

//            [
//                'columns' => [
//                    [
//                        'label'           => '昨日新增用户',
//                        'attribute'       => 'addUser',
//
//                        'valueColOptions' => ['style' => 'width:25%;cursor: pointer;','onclick'=>"window.open('URL','_self')"],
//                        'labelColOptions' => ['style' => 'width:25%;text-align: center;cursor: pointer;','onclick'=>"window.open('URL','_self')"],
//                    ],
//                    [
//                        'label'           => '昨日活跃用户',
//                        'attribute'       => 'active',
//
//                        'valueColOptions' => ['style' => 'width:25%;cursor: pointer;','onclick'=>"window.open('URL','_self')"],
//                        'labelColOptions' => ['style' => 'width:25%;text-align: center;cursor: pointer;','onclick'=>"window.open('URL','_self')"],
//                    ],
//
//                ],
//            ],

    ],
    'enableEditMode'=>false,
];


?>
<!--<div class="site-index">-->
<!--菜单-->
<!--</div>-->

<div class="sys-operator-view">
    <div class="notice">
        <ul data-toggle="modal" data-target="#myModal" id="noticeDiv"></ul>
    </div>
    <div class="page-header">
        <h1></h1>
    </div>

    <?= DetailView::widget($columns1)?>
    <?= DetailView::widget($columns2)?>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden='true'>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                    <div class="tab-content"></div>
                    <div style="display: flex; flex-direction: row-reverse">
                        <div id="JsPagination" class="pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>






<script>
    <?php $this->beginBlock('js_checkbox_active') ?>

    <?php
    $login_once = Yii::$app->session->get('login_once');
    ?>
    var login_once ='<?=$login_once?>';
    var noticeArr = <?=$notice?>

    if (noticeArr.length !== 0 && login_once == '1') {
  $('#myModal').modal({
    show: true
  });
  $(function () {
    // 调用 公告滚动函数
    setInterval("noticeUp('.notice ul','-35px',1000)", 3000);
  });
}

var _ref = ['', '', [], 0, noticeArr.length],
    HTML = _ref[0],
    noticeHTML = _ref[1],
    noticeTitleArr = _ref[2],
    childrenIndex = _ref[3],
    totalPages = _ref[4];

for (var i = 0; i < noticeArr.length; i++) {
  HTML += '<div class="alert alert-danger tab-pane fade">\n              <p style="word-break: break-all;">' + noticeArr[i].content + '</p>\n          </div>';
  noticeHTML += '<li><span class="glyphicon glyphicon-volume-up"></span> ' + noticeArr[i].content + '</li>';
  noticeTitleArr.push('' + noticeArr[i].title);
}
$(".tab-content").html(HTML);
$("#myModalLabel").html(noticeTitleArr[childrenIndex]);
var options = {
  totalPages: totalPages,
  size: "normal",
  alignment: "right",
  onPageClicked: function onPageClicked(e, originalEvent, type, index) {
    childrenIndex = index;
    $('.alert').removeClass('in active');
    $('.alert:eq(' + (childrenIndex - 1) + ')').addClass('in active');
    $("#myModalLabel").html(noticeTitleArr[childrenIndex - 1]);
  }
};
$('.alert:eq(' + childrenIndex + ')').addClass('in active');

$('#JsPagination').bootstrapPaginator(options);
/*公告文字滚动JS**/
$("#noticeDiv").html(noticeHTML);

var _loop = function _loop(_i) {
  $("#noticeDiv").children()[_i].addEventListener('click', function (e) {
    childrenIndex = _i;
    $('.alert').removeClass('in active');
    $('.alert:eq(' + childrenIndex + ')').addClass('in active');
    $("#myModalLabel").html(noticeTitleArr[childrenIndex + 1]);
  }, false);
};

for (var _i = 0; _i < $("#noticeDiv").children().length; _i++) {
  _loop(_i);
}

function noticeUp(obj, top, time) {
  $(obj).animate({
    marginTop: top
  }, time, function () {
    $(this).css({
      marginTop: "0"
    }).find(":first").appendTo(this);
  });
}
jQuery(document).ready(function () {
  setInterval("noticeUp('.notice ul','-35px',1000)", 3000);
});


    // $(function() {
    // //     // 调用 公告滚动函数
    //     setInterval("noticeUp('.notice ul','-35px',1000)", 3000);
    // });

    <?php $this->endBlock(); ?>
</script>
<!--将编写的js代码注册到页面底部-->
<script>
    function noticeUp(obj, top, time) {
        $(obj).animate({
            marginTop: top
        }, time, function() {
            $(this).css({
                marginTop: "0"
            }).find(":first").appendTo(this);
        })
    }
</script>
<?php $this->registerJs($this->blocks['js_checkbox_active'],\yii\web\View::POS_LOAD);?>

<?php
$this->registerJsFile('@web/js/bootstrap-paginator.js',['depends'=>['backend\assets\AppAsset']]);
$this->registerJsFile('@web/js/jquery.history.js',['depends'=>['backend\assets\AppAsset']]);
?>

<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .container>.table-responsive {
        cursor: pointer;
    }

    .container>.table-responsive a {
        text-decoration: none;
        color: rgb(51, 51, 51);
        font-size: 16px;
    }

    .container>.table-responsive .td {
        font-weight: bold;
    }

    .container .p {
        cursor: text;
        font-size: 15px;
        font-weight: bold;
        color: #a94442;
    }


    /*公告部分**/

    .notice {
        margin: 20px 0;
        height: 35px;
        background-color: rgb(242, 222, 222);
        overflow: hidden;
    }

    .notice li {
        list-style: none;
        text-align: center;
        height: 35px;
        line-height: 35px;
        /*以下为了单行显示，超出隐藏*/
        display: block;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }


    /* 分页 */

    .pagination {
        margin: 20px 0;
    }

    .pagination ul {
        display: inline-block;
        *display: inline;
        margin-bottom: 0;
        margin-left: 0;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        *zoom: 1;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .pagination ul>li {
        display: inline;
    }

    .pagination ul>li>a,
    .pagination ul>li>span {
        float: left;
        padding: 4px 12px;
        line-height: 20px;
        text-decoration: none;
        background-color: #ffffff;
        border: 1px solid #dddddd;
        border-left-width: 0;
    }

    .pagination ul>li>a:hover,
    .pagination ul>li>a:focus,
    .pagination ul>.active>a,
    .pagination ul>.active>span {
        background-color: #f5f5f5;
    }

    .pagination ul>.active>a,
    .pagination ul>.active>span {
        color: #999999;
        cursor: default;
    }

    .pagination ul>.disabled>span,
    .pagination ul>.disabled>a,
    .pagination ul>.disabled>a:hover,
    .pagination ul>.disabled>a:focus {
        color: #999999;
        cursor: default;
        background-color: transparent;
    }

    .pagination ul>li:first-child>a,
    .pagination ul>li:first-child>span {
        border-left-width: 1px;
        -webkit-border-bottom-left-radius: 4px;
        border-bottom-left-radius: 4px;
        -webkit-border-top-left-radius: 4px;
        border-top-left-radius: 4px;
        -moz-border-radius-bottomleft: 4px;
        -moz-border-radius-topleft: 4px;
    }

    .pagination ul>li:last-child>a,
    .pagination ul>li:last-child>span {
        -webkit-border-top-right-radius: 4px;
        border-top-right-radius: 4px;
        -webkit-border-bottom-right-radius: 4px;
        border-bottom-right-radius: 4px;
        -moz-border-radius-topright: 4px;
        -moz-border-radius-bottomright: 4px;
    }

    .pagination-centered {
        text-align: center;
    }

    .pagination-right {
        text-align: right;
    }
</style>
