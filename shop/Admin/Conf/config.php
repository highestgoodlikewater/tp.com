<?php
return array(
	//'������'=>'����ֵ'
    'URL_MODEL'             =>  1,      // URL����ģʽ,��ѡ����0��1��2��3,������������ģʽ��
    // 0 (��ͨģʽ); 1 (PATHINFO ģʽ); 2 (REWRITE  ģʽ); 3 (����ģʽ)  Ĭ��ΪPATHINFO ģʽ

    //��ҳ����ʾ��־׷����Ϣ
    'SHOW_PAGE_TRACE'       => true,
    'URL_CASE_INSENSITIVE'  =>  true,   // Ĭ��false ��ʾURL���ִ�Сд true���ʾ�����ִ�Сд

    'DB_TYPE'               =>  'mysql',     // ���ݿ�����
    'DB_HOST'               =>  'localhost', // ��������ַ
    'DB_NAME'               =>  'shop',          // ���ݿ���
    'DB_USER'               =>  'root',      // �û���
    'DB_PWD'                =>  'root',          // ����
    'DB_PORT'               =>  '3306',        // �˿�
    'DB_PREFIX'             =>  'sw_',    // ���ݿ��ǰ׺
    'TMPL_ENGINE_TYPE'      =>  'Smarty',    //�޸�ģ������Ϊsmarty
    'TMPL_ACTION_SUCCESS'   =>  'Tpl/success', // Ĭ�ϳɹ���ת��Ӧ��ģ���ļ�
);