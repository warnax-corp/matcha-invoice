<?php
/**
 * @copyright ICZ Corporation (http://www.icz.co.jp/)
 * @license See the LICENCE file
 * @author <matcha@icz.co.jp>
 * @version $Id$
 */

/**
 * 環境依存しない定数を定義する
 */

// バージョン
Configure::write('Version', '2.6.5');

// ページネーション 1ページの行数
Configure::write('Paginate.LinesPerPage', 20);

// 帳票の最大行数
Configure::write('MaxFormLine', 10);

// 送付書類の最大行数
Configure::write('CoverpageMaxFormLine', 9);

// MySQL5.7でONLY_FULL_GROUP_BY設定を削除するフラグ
Configure::write('onlyFullGroupByDisable', true);

// PDF生成時に自社の住所欄に自社担当者が設定されていた場合の表示方法
// true = 従来の通り、自社担当者の住所がない場合は住所の表示はされない
// false = 自社担当者の住所がない場合は自社の住所が繰り上げ表示になる
Configure::write('PdfForceOverwriteChargeAddressEvenEmpty' , false);

// 都道府県
Configure::write('PrefectureCode', array(
	0	=> '選択してください',
	1	=> '北海道',	2	=> '青森県',	3	=> '岩手県',	4	=> '宮城県',	5	=> '秋田県',
	6	=> '山形県',	7	=> '福島県',	8	=> '茨城県',	9	=> '栃木県',	10	=> '群馬県',
	11	=> '埼玉県',	12	=> '千葉県',	13	=> '東京都',	14	=> '神奈川県',	15	=> '新潟県',
	16	=> '富山県',	17	=> '石川県',	18	=> '福井県',	19	=> '山梨県',	20	=> '長野県',
	21	=> '岐阜県',	22	=> '静岡県',	23	=> '愛知県',	24	=> '三重県',	25	=> '滋賀県',
	26	=> '京都府',	27	=> '大阪府',	28	=> '兵庫県',	29	=> '奈良県',	30	=> '和歌山県',
	31	=> '鳥取県',	32	=> '島根県',	33	=> '岡山県',	34	=> '広島県',	35	=> '山口県',
	36	=> '徳島県',	37	=> '香川県',	38	=> '愛媛県',	39	=> '高知県',	40	=> '福岡県',
	41	=> '佐賀県',	42	=> '長崎県',	43	=> '熊本県',	44	=> '大分県',	45	=> '宮崎県',
	46	=> '鹿児島県',	47	=> '沖縄県',
));

//ステータスコード
Configure::write('StatusCode', array(
	0	=> '有効',	1	=> '無効',
));

//印鑑ステータスコード
Configure::write('SealCode', array(
	0	=> '登録済み',	1	=> '未登録',
));

//発行ステータスコード
Configure::write('IssuedStatCode', array(
	1 => '作成済み',
	0 => '下書き',
	2 => '破棄',
	3 => '未入金',
	4 => '入金済み',
	5 => '入金対象外'
));

//消費税コード
Configure::write('ExciseCode', array(
	2	=> '外税',
	1	=> '内税',
	3	=> '非課税',
));

//端数処理コード
Configure::write('FractionCode', array(
						1 => '切り捨て',
						0 => '切り上げ',
						2 => '四捨五入',
));

//消費税端数計算
Configure::write('TaxFractionTimingCode', array(
		0 => '帳票単位',
		1 => '明細の一行単位',
));

//口座区分コード
Configure::write('AccountTypeCode', array(
						''=>  '選択ください',
						0 => '普通',
						1 => '当座',
));

//割引コード
Configure::write('DiscountCode', array(
						0 => '％',
						1 => '円',
						2 => '設定しない',
));

//小数点処理
Configure::write('DecimalCode', array(
						0 => '桁なし',
						1 => '小数点第一位',
						2 => '小数点第二位',
						3 => '小数点第三位',
));

//送付方法
Configure::write('SendMethod', array(
0 => '郵送',
1 => 'FAX',
));

//判子作成方法
Configure::write('SealMethod', array(
0 => 'ファイルをアップロード',
1 => '文字列から印鑑を作成',
));

//アクションコード
Configure::write('ActionCode', array(
						0 => 'ログイン',
						1 => 'ログアウト',
						2 => '見積書作成',
						3 => '見積書更新',
						4 => '見積書削除',
						5 => '請求書作成',
						6 => '請求書更新',
						7 => '請求書削除',
						8 => '納品書作成',
						9 => '納品書更新',
						10 => '納品書削除',
						11 => '合計請求書作成',
						12 => '合計請求書更新',
						13 => '合計請求書削除',
						14 => '定期請求書雛形作成',
						15 => '定期請求書雛形更新',
						16 => '定期請求書雛形削除',
						17 => '定期請求書作成',

));

//顧客・自社設定の支払い月
Configure::write('PaymentMonth', array(
							''=>  '選択ください',
							0 => '当月',
							1 => '翌月',
							2 => '翌々月',
							3 => '3ヶ月後',
							4 => '4ヶ月後',
							5 => '5ヶ月後',
							6 => '6ヶ月後',
));




//帳票カラー設定
Configure::write('ColorCode',array(
						0 => array( 'name' => '黒',
									'code' => array('r'=>'00','g'=>'00','b'=>'00',)),
						1 => array( 'name' => '青',
									'code' => array('r'=>'00','g'=>'00','b'=>'FF',)),
						2 => array( 'name' => '赤',
									'code' => array('r'=>'FF','g'=>'00','b'=>'00',)),
						3 => array( 'name' => '緑',
									'code' => array('r'=>'00','g'=>'FF','b'=>'00',)),
));

//方向ステータスコード
Configure::write('DirectionCode', array(
	0	=> '縦',	1	=> '横',
));

//権限ステータスコード
Configure::write('AuthorityCode', array(
				1	=> '自分のデータのみ',
				2	=> '他人のデータ閲覧可能',
				3	=> '他人のデータ編集可能',
));





//行属性コード
Configure::write('LineAttribute', array(
	0	=> '通常',
	1	=> '小計',
	2	=> 'グループ小計',
	3	=> '割引(円)',
	4	=> '割引(％)',
	5	=> '備考',
// 	6	=> '内消費税',
// 	7	=> '外消費税',
	8   => '改ページ'
));

//税区分コード
Configure::write('TaxClass', array(
"0"	=> '------',
"2"	=> '外税(5%)',
"1"	=> '内税(5%)',
"82"	=> '外税(8%)',
"81"	=> '内税(8%)',
"92"	=> '軽減外税(8%)',
"91"	=> '軽減内税(8%)',
"102"	=> '外税(10%)',
"101"	=> '内税(10%)',
"3"	=> '非課税',
));

//税区分コード
Configure::write('TaxRates', array(
2	=> 0.05,
1	=> 0.05,
82	=> 0.08,
81	=> 0.08,
92	=> 0.08,
91	=> 0.08,
102	=> 0.10,
101	=> 0.10,
3	=> 0,
));
//税区分コード
Configure::write('TaxOperationDate', array(
	5 => array(
		"start" => "1997-04-01",
		"end"   => "2014-03-31"
	),
	8 => array(
		"start" => "2014-04-01",
		"end"   => "2019-09-30"
	),
	10 => array(
		"start" => "2019-10-01",
		"end" => null
	)
));

//確認メールステータスコード
Configure::write('MailStatusCode', array(
						0 => '確認待ち',
						1 => '確認済み',
						2 => '修正願い',
));
//メールプロトコルコード
Configure::write('MailProtocolCode', array(
						0 => 'SMTP',
						1 => 'SMTP_AUTH',
));

//SMTPセキュリティコード
Configure::write('SmtpSecurityCode', array(
						0 => 'なし',
						1 => 'SSL',
						2 => 'TLS',
));
Configure::write('Edit_StatProtocolCode',array(
						0 => '簡易',
						1 => '詳細',
));

//敬称
Configure::write('HonorCode', array(
0 => '御中',
1 => '様',
2 => 'その他',
));

//押印設定
Configure::write('SealFlg', array(
		1 => '表示',
		0 => '非表示'
));

//確認メールログイン期間(日)
Configure::write('MailLoginTerm', 7);


//イメージの最大容量
Configure::write('ImageSize', 1024 * 1024);

//アイテムのエラー配列
Configure::write('ItemErrorCode',array(
			'ITEM' => array(
				'NO'=>array()
				,'FLAG'=>0
			),
			'ITEM_NO'=>array(
				'NO'=>array()
				,'FLAG'=>0
			),
			'QUANTITY'=>array(
				'NO'=>array()
				,'FLAG'=>0
			),
			'UNIT'=>array(
				'NO'=>array()
				,'FLAG'=>0
			),
			'UNIT_PRICE'=>array(
				'NO'=>array()
				,'FLAG'=>0
			)
));


//メール設定

Configure::write('Mail.From','抹茶請求書');
//パスワード再設定用サブジェクト
Configure::write('Mail.Subject.PassEdit','【抹茶請求書】パスワード再設定のお知らせ');
//パスワード再設定用テキスト
Configure::write('Mail.Txt.PassEdit',"▼こちらのURLからパスワードを再設定してください。");


//連番設定時の帳票ID
Configure::write('FormID', array(
	'Quote' 	  => 0,
	'Delivery' 	  => 1,
	'Bill' 		  => 2,
	'TotalBill'	  => 3,
	'Receipt' 	  => 4,
	'Regularbill' => 5

));

//付番形式
Configure::write('NumberingFormat', array(
	0 => '通し番号',
	1 => '日付形式'
));

//連番設定
Configure::write('Serial', array(
0 => '連番を設定',
1 => '設定しない'
));


//デザイン設定の画像アップロードディレクトリ
Configure::write('ImgUploadDir',IMAGES.'cms'.DS);


// 検索結果セッション削除タイミング指定
Configure::write('SessionDeleteAlways', 0);
Configure::write('SessionDeleteNever', 1);
Configure::write('SessionDeleteOnlyMenu', 2);

Configure::write('SearchBoxSessionMode', Configure::read('SessionDeleteOnlyMenu'));


/**
 * json_encodeの代替(PHP5.2未満の場合)
 */

if ( !function_exists('json_encode') )
{
	function json_encode( $array )
	{
		if( !is_array($array) )
			return _js_encValue( $array );

		$assoc = FALSE;
		if ( array_diff(array_keys($array),range(0,count($array)-1)) )
			$assoc = TRUE;

		$data = array();
		foreach( $array as $key=>$value )
		{
			if ( $assoc )
			{
				if ( !is_numeric($key) )
					$key = preg_replace('/(["\\\])/u','\\\\$1',$key );
				$key = '"'.$key.'"';
			}
			$value = _js_encValue( $value );
			$data[] = ($assoc ? "$key:$value" : $value);
		}
		if ( $assoc )
			return "{".implode(',',$data)."}";
		else
			return "[".implode(',',$data)."]";
	}

	function _js_encValue( $value )
	{
		if ( is_array($value) )
			return json_encode( $value );
		else if ( is_bool($value) )
			return ($value ? 'true' : 'false');
		else if ( $value === NULL )
			return 'null';
		else if ( is_string($value) )
			return '"'._js_toU16Entities($value).'"';
		else if ( is_numeric($value) )
			return $value;
		return '"'.$value.'"';
	}

	function _js_toU16Entities( $string )
	{
		$len = mb_strlen( $string, 'UTF-8' );
		$str = '';
		$strAry = preg_split( '//u', $string );
		for ( $idx=0, $len=count($strAry); $idx < $len; $idx++ )
		{
			$code = $strAry[$idx];
			if ( $code === '' ) continue;
			if ( strlen($code) > 1 )
			{
				$hex = bin2hex( mb_convert_encoding($code,'UTF-16','UTF-8') );
				if ( strlen($hex) == 8 ) // surrogate pair
					$str .= vsprintf( '\u%04s\u%04s', str_split($hex,4) );
				else
					$str .= sprintf( '\u%04s', $hex );
			} else {
				switch ( $code )
				{
					case '"':
					case '/':
					case '\\':
						$code = '\\'.$code;
				}
				$str .= $code;
			}
		}
		$str = str_replace( array("\r\n","\r","\n"), array('\r\n','\r','\n'), $str );
		return $str;
	}
}
