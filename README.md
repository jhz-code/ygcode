# ygcode

### 方法

FindCode::find($URL,$appKey,$type,$code);

####  发参 :
$URL：请求接口 <br>
$appKey：通讯key <br>
$type：查询类型 <br>
$code：码 <br>

<br>

#### 反参 :
code : 1 通讯成功    0通讯失败<br>
<br>
data ： 返回实质数据 <br>

~~~

{"code":1,"data":{"product_code":"7b0acxx","product_title":"产品名称","product_id":1,"product_money":100,"source_type":"来源"}}


