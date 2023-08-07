<?php

    namespace Tests\Unit;

    class YourTestClass extends \Codeception\Test\Unit
    {
        /**
         * @var \UnitTester
         */
        protected function setUp(): void
    {
        parent::setUp();
// Kết nối với cơ sở dữ liệu
        $this->getModule('Db')->_initialize();
// Thiết lập cấu hình kết nối cơ sở dữ liệu
        $this->getModule('Db')->_cleanup();
        $this->getModule('Db')->_loadDump('tests/Support/Data/nhom5.sql');
    }
// Chèn dữ liệu vào cơ sở dữ liệu
    public function testInsertData()
    {
        $this->getModule('Db')->haveInDatabase('infonhom5', [
            'Name' => 'Vân Hương',
			'Class' => '56SD3',
        ]);
// Kiểm tra sự tồn tại của dữ liệu trong cơ sở dữ liệu
        $this->getModule('Db')->seeInDatabase('infonhom5', [
            'Name' => 'Vân Hương',
			'Class' => '56SD3',
        ]);
    }
// Cập nhật dữ liệu trong cơ sở dữ liệu
    public function testUpdateData()
    {
        $this->getModule('Db')->updateInDatabase('infonhom5', [
            'Class' => '56SD2',
        ], [
            'Name' => 'Hà Phương',
        ]);
// Kiểm tra dữ liệu đã được cập nhật trong cơ sở dữ liệu
        $this->getModule('Db')->seeInDatabase('infonhom5', [
            'Name' => 'Hà Phương',
            'Class' => '56SD2',
        ]);
    }}
?>