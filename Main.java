import java.util.Arrays;

/******************************************************************************

                            Online Java Compiler.
                Code, Compile, Run and Debug java program online.
Write your code in this editor and press "Run" button to execute it.

*******************************************************************************/

public class Main
{
    public static int equivalentArrays(int[ ] a1, int[ ] a2) {
             int r =0;
        for(int i=0; i<a1.length; i++) {
        if(Arrays.asList(a2).contains(a1[i])){
            r = 1;
        }
        else{
            r=  0;
        }
        System.out.println("kok"+a1[i]);
        System.out.println(r);
    }
    return r;
     }
    
 

	public static void main(String[] args) {
	    int[] f = {1,2,1,3,2};
        int[] s = {1,2,1,3,2};
	    int r = equivalentArrays(f,s);
		System.out.println("Hello World " + r);
		
	}
}
