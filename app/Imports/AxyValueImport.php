<?php

namespace App\Imports;

use App\Models\AxyValue;
use Maatwebsite\Excel\Concerns\ToModel;

class AxyValueImport implements ToModel
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new AxyValue([
            'axy_name_id' => 10,
            'age' => $row[0],
            'axy_15' => $row[1],
            'axy_16' => $row[2],
            'axy_17' => $row[3],
            'axy_18' => $row[4],
            'axy_19' => $row[5],
            'axy_20' => $row[6],
            'axy_21' => $row[7],
            'axy_22' => $row[8],
            'axy_23' => $row[9],
            'axy_24' => $row[10],
            'axy_25' => $row[11],
            'axy_26' => $row[12],
            'axy_27' => $row[13],
            'axy_28' => $row[14],
            'axy_29' => $row[15],
            'axy_30' => $row[16],
            'axy_31' => $row[17],
            'axy_32' => $row[18],
            'axy_33' => $row[19],
            'axy_34' => $row[20],
            'axy_35' => $row[21],
            'axy_36' => $row[22],
            'axy_37' => $row[23],
            'axy_38' => $row[24],
            'axy_39' => $row[25],
            'axy_40' => $row[26],
            'axy_41' => $row[27],
            'axy_42' => $row[28],
            'axy_43' => $row[29],
            'axy_44' => $row[30],
            'axy_45' => $row[31],
            'axy_46' => $row[32],
            'axy_47' => $row[33],
            'axy_48' => $row[34],
            'axy_49' => $row[35],
            'axy_50' => $row[36],
            'axy_51' => $row[37],
            'axy_52' => $row[38],
            'axy_53' => $row[39],
            'axy_54' => $row[40],
            'axy_55' => $row[41],
            'axy_56' => $row[42],
            'axy_57' => $row[43],
            'axy_58' => $row[44],
            'axy_59' => $row[45],
            'axy_60' => $row[46],
            'axy_61' => $row[47],
            'axy_62' => $row[48],
            'axy_63' => $row[49],
            'axy_64' => $row[50],
            'axy_65' => $row[51],
            'axy_66' => $row[52],
            'axy_67' => $row[53],
            'axy_68' => $row[54],
            'axy_69' => $row[55],
            'axy_70' => $row[56],
            'axy_71' => $row[57],
            'axy_72' => $row[58],
            'axy_73' => $row[59],
            'axy_74' => $row[60],
            'axy_75' => $row[61],
            'axy_76' => $row[62],
            'axy_77' => $row[63],
            'axy_78' => $row[64],
            'axy_79' => $row[65],
            'axy_80' => $row[66],
            'axy_81' => $row[67],
            'axy_82' => $row[68],
            'axy_83' => $row[69],
            'axy_84' => $row[70],
            'axy_85' => $row[71],
            'axy_86' => $row[72],
            'axy_87' => $row[73],
            'axy_88' => $row[74],
            'axy_89' => $row[75],
            'axy_90' => $row[76],
            'axy_91' => $row[77],
            'axy_92' => $row[78],
            'axy_93' => $row[79],
            'axy_94' => $row[80],
            'axy_95' => $row[81],
            'axy_96' => $row[82],
            'axy_97' => $row[83],
            'axy_98' => $row[84],
            'axy_99' => $row[85],
            'axy_100' => $row[86],
            'axy_101' => $row[87],
            'axy_102' => $row[88],
            'axy_103' => $row[89],
            'axy_104' => $row[90],
            'axy_105' => $row[91],
            'axy_106' => $row[92],
            'axy_107' => $row[93],
            'axy_108' => $row[94],
            'axy_109' => $row[95],
            'axy_110' => $row[96],
        ]);
    }
}
