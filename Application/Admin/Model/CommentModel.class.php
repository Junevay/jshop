<?php
namespace Admin\Model;
use Think\Model;
class CommentModel extends Model 
{
	// 评论时允许提交的字段
	protected $insertFields = 'star,content,goods_id,email,name';
	
	// 发表评论时表单验证规则 
	protected $_validate = array(
		array('goods_id', 'require', '参数错误！', 1),
		array('star', '1,2,3,4,5', '分值只能是1-5之间的数字！', 1, 'in'),
		array('content', '1,200', '内容必须是1-200个字符！', 1, 'length'),
	);
	
	protected function _before_insert(&$data, $option)
	{


		$data['addtime'] = date('Y-m-d H:i:s');

	}
	
	/**
	 * 取一件商品的评论
	 *
	 * @param unknown_type $goodsId
	 */
	public function search($goodsId, $pageSize = 5)
	{
		// 这里因为要做AJAX翻页，所以我们需要自己做翻页不能用TP自带的。自带的不是AJAX的一点击就跳转了
		$where['a.goods_id'] = array('eq', $goodsId);
		
		// 取出总的记录数
		$count = $this->alias('a')->where($where)->count();
		// 计算总的页数
		$pageCount = ceil($count / $pageSize);
		// 获取当前页
		$currentPage = max(1, (int)I('get.p', 1)); // >= 1 的整数
		// 计算limit上的第一个参数：偏移量
		$offset = ($currentPage - 1) * $pageSize;
		

		
		// 取数据
		$data = $this->alias('a')
		->field('a.id,a.content,a.addtime,a.star')
		->where($where)
		->order('a.id DESC')
		->limit("$offset,$pageSize")
		->group('a.id')
		->select();
		


		
		return array(
			'data' => $data,
			'pageCount' => $pageCount,


		);
	}
}
















