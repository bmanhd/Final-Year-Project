import HomeHub.*;

import org.omg.CORBA.*;
import java.io.*;

public class HomeHubClient {
    public static void main( String[] args ) {
	try {
        // create and initialize the ORB
        ORB orb = ORB.init(args, null);

		BufferedReader in = new BufferedReader(new FileReader("server.ref"));
      	String stringified_ior = in.readLine();

      	System.out.println("stringified_ior = " + stringified_ior);
      	org.omg.CORBA.Object server_ref = 		
		orb.string_to_object(stringified_ior);

		HomeHub.MyServer s = 
		HomeHub.MyServerHelper.narrow(server_ref);

	    	s.print("Client has sent a message \n\n");
		
		//method for alarm raising
		AlarmHolder ah = new alarmHolder();
		s.raise_Alarm("Alarm Raised!" , ah);


		//method for adding camera
		cameraHolder ch = new cameraHolder();
		s.add_Camera(ch);
		Camera camera = ch.value;
		
		//method for adding sensor
		sensorHolder sh = new sensorHolder();
		s.add_Sensor(sh);
		Sensor sensor = sh.value;

		} catch ( Exception e) {
	    e.printStackTrace();
	}
    }
}


		
		
		

		


