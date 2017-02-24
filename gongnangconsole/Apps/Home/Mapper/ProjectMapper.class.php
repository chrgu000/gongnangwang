<?php
namespace Home\Mapper;

final class ProjectMapper implements IMapper{
	public function tranlate(array $rows, $isArray){
		if($isArray){
			foreach ($rows as $k=>$v){
				$rows[$k]['pro_state_txt'] = _getProStateById($v['pro_state']);
				$rows[$k]['pro_stage_txt'] = _getProStageById($v['pro_stage']);
				$rows[$k]['pro_type_txt'] = _getProtypeById($v['pro_type']);
				$rows[$k]['pro_value_txt'] = _getProValueById($v['pro_value']);
			}			
		}else{
			$rows['pro_state_txt'] = _getProStateById($rows['pro_state']);
			$rows['pro_stage_txt'] = _getProStageById($rows['pro_stage']);
			$rows['pro_type_txt'] = _getProtypeById($rows['pro_type']);
			$rows['pro_value_txt'] = _getProValueById($rows['pro_value']);
		}
		
		return $rows;
	}
}