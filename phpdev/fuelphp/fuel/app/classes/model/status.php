<?php

class Model_Status extends Model
{
	public static function find_body_by_username($username)
	{
		$data = array(
					array(
					'date' => '2018/07/09 23:00',
					'body' => 'hoge',
					),
					array(
						'date' => '2018/07/10 23:00',
						'body' => 'fuga',
					),
				);
		return $data;
	}
}