<?php
/**
 * @desc һ���ļ�һ���࣬ע�ͱ��붼д�����淶��һ��������Ϊ����
 *
 * @author lmyoaoa�����ߣ�
 * @since 2016-11-08
 */
namespace codestyle;

use db\mysql;

// �ļ����������utf-8��ʽ�����һ��з�������\n�������ó�unix���з���windowsΪ\r\n

// ���������Դ��շ�ʽ����
// ����֮�������ո�
class CodeStyle {

    // �ೣ������ȫ��д����ÿ���������»���_����
    const DOMAIN = 'http://lmyoaoa.com';

    // ������̬������Ҫ��д����ͬ�����»���_����
    public static $STATUS = 1;

    // �ܱ������ྲ̬�������Լ�˽�о�̬��������ʹ���»��߿�ͷ_ÿ��������_����
    protected static $_STATUS = 2;
    private static $_SUPER_STATUS = 3;

    // �����ı�������С�շ�����
    public $line = 1;

    // �ܱ����Լ�˽�б�������_��ͷ
    protected $_protectValue = 1;
    private $_pValue = 1;


}

// �ļ���β������ʹ��php������? >����ֹ���ֶ���Ŀո�


