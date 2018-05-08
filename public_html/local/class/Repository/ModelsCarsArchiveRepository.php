<?
namespace Repository;

use Factory\SectionArchiveFactory;

/**
* Репозиторий Модели авто
*/
class ModelsCarsArchiveRepository extends IblockRepository
{
    public function __construct()
    {
        parent::__construct();
        $this->iblockid=IBLOCK_ARH_MODELS_CARS;
    }

    public function getObjSection ($array)
    {
        return SectionArchiveFactory::createFromArray($array);
    }

}