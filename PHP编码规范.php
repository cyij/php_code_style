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
// �ļ������ʽ����һ��tabΪ4���ո񣨲�������4���ո��Ҫһ��tab��Ϊ4���ո����

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

    /**
     * @desc ����������С�շ�ʽ������ע�ͱ���д
     *
     * @author ���߱���д�������պ������˿����ҵ���Ӧ������
     * @param int $keyName ����1
     * @param array $array ����2���������Ϊ���飬�����д�������ĸ�ʽ����array(1, 2, 3,...)
     * @return bool
     */
    // ������ǰ�����пո񣬱��������֮������пո����
    public function funcName($keyName, $array) {
        // �κ��ַ�����������ƴ�ӣ��������ÿո����
        $str = $keyName . '123456';

        return TRUE;
    }

}

// �ļ���β������ʹ��php������? >����ֹ���ֶ���Ŀո�


