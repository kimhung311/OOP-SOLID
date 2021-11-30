<?php
 
interface nhatruong
{
    public function tienhocphi();
}
 
class lop
{
}
 
class hocsinhkhagia extends lop implements nhatruong
{
    public function tienhocphi()
    {
            throw new Exception('phải đóng học phí');
    }

}
 
class hocsinhngheo extends lop 
{
    public function tienhocphi()
    {
        throw new Exception('học sinh hộ nghèo được miễn giảm học phí');
    }
}